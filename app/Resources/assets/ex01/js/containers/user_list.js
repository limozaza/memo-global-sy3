import React, {Component} from 'react';
import {connect} from 'react-redux';

import {bindActionCreators} from 'redux';
import {selectUser} from '../actions/index';


class UserList extends Component{
    render(){
        return(
            <div className="col-lg-4">
                {
                    this.props.users.map((user)=>{
                        return(
                            <li className="list-group-item" key={user.id} onClick={()=>this.props.selectUser(user)} >
                                {user.nom}
                            </li>
                        );
                    })
                }
            </div>
        );
    }
}

const mapStateToProps = (state) => {
    return {
        users: state.users
    }
};
const mapDispatchToProps = (dispatch) => {
    return {
        selectUser: bindActionCreators(selectUser, dispatch),
    }
};

export default connect(mapStateToProps,mapDispatchToProps)(UserList);