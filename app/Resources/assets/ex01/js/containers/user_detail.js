import React, {Component} from 'react';
import {connect} from 'react-redux';

import {bindActionCreators} from 'redux';
import {selectUser} from '../actions/index';


class UserDetail extends Component{
    render(){
        const myActiveUser = this.props.activeUser;

        //console.log(myActiveUser)
        if(!myActiveUser){
            return(
                <div className="col-lg-7">Selectionnez un utilisateur</div>
            );
        }
        return(
            <div className="col-lg-7">
                <h1>detail de {myActiveUser.nom}</h1>
            </div>
        );
    }
}

const mapStateToProps = (state) => {
    return {
        activeUser: state.activeUser
    }
};


export default connect(mapStateToProps)(UserDetail);
