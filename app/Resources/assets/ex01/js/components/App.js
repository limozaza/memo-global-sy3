import React, {Component} from 'react';

import UserList from '../containers/user_list';
import UserDetail from '../containers/user_detail'


class App extends Component{

    render(){
        return(
            <div className="col-lg-12">
                <h1>Boufares Zakaria</h1>
                <UserList />
                <UserDetail />
            </div>
        );
    }
}
export default App;
