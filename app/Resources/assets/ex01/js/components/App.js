import React, {Component} from 'react';

import UserList from '../containers/user_list';


class App extends Component{

    render(){
        return(
            <div className="col-lg-12">
                <h1>Boufares Zakaria</h1>
                <UserList />
            </div>
        );
    }
}
export default App;
