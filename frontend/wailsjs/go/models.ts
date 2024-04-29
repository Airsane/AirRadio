export namespace main {
	
	export class Radio {
	    name: string;
	    url: string;
	    icon?: string;
	    language: string;
	
	    static createFrom(source: any = {}) {
	        return new Radio(source);
	    }
	
	    constructor(source: any = {}) {
	        if ('string' === typeof source) source = JSON.parse(source);
	        this.name = source["name"];
	        this.url = source["url"];
	        this.icon = source["icon"];
	        this.language = source["language"];
	    }
	}

}

