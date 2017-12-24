import React, {Component} from 'react';

import UserList from '../containers/user_list';
import UserDetail from '../containers/user_detail';

import CategorieList from '../containers/categorie_list';


class App extends Component{

    render(){
        return(
            <div className="col-lg-12">
                <h1>Boufares Zakaria</h1>
                <UserList />
                <UserDetail />
                <hr/>
                <CategorieList defaultCategorie="Sciences"/>
            </div>
        );
    }
}
export default App;
