import { Switch, Route } from 'react-router-dom';

import Home from "../views/Home"

export default function content() {
  return(
    <div className='flex-auto overflow-auto'>
        <div className='px-8 pt-5'>
        <Switch>
          <Route exact path="/">
              <Home />
          </Route>
        </Switch>
        </div>
    </div>
  )
}
