import React, {Component} from 'react';
import {connect} from 'react-redux';
class UserList extends Component{
    render(){
        return(
            <div className="col-lg-4">
                {
                    this.props.users.map((user)=>{
                        return(
                            <li className="list-group-item" key={user.id}>
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
}
export default connect(mapStateToProps)(UserList);