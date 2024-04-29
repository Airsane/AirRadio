package main

import (
	"context"
	_ "embed"
	"encoding/json"
	"fmt"
)

// global radio list
var radios Radios = Radios{}

//go:embed radio.json
var radiosJSON string

// App struct
type App struct {
	ctx context.Context
}

// NewApp creates a new App application struct
func NewApp() *App {
	return &App{}
}

// startup is called when the app starts. The context is saved
// so we can call the runtime methods
func (a *App) startup(ctx context.Context) {
	a.ctx = ctx
}

type Radios []Radio

func UnmarshalRadios(data []byte) (Radios, error) {
	var r Radios
	err := json.Unmarshal(data, &r)
	return r, err
}

func (r *Radios) Marshal() ([]byte, error) {
	return json.Marshal(r)
}

type Radio struct {
	Name     string  `json:"name"`
	URL      string  `json:"url"`
	Icon     *string `json:"icon"`
	Language string  `json:"language"`
}

func getRadios() Radios {
	if len(radios) == 0 {
		json.Unmarshal([]byte(radiosJSON), &radios)
	}
	return radios
}

// Greet returns a greeting for the given name
func (a *App) Greet(name string) string {
	var radios Radios = getRadios()
	// return first radio name

	fmt.Println(radios[0].Name)
	return fmt.Sprintf("Hello, %s", radios)
}

func (a *App) GetRadios() Radios {
	return getRadios()
}
