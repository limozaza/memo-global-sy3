import React, {Component} from 'react';
import {connect} from 'react-redux';

import {bindActionCreators} from 'redux';
import {getCategories} from '../actions/index';


class CategorieList extends Component{


    state = {
        selectedCategorie: this.props.defaultCategorie
    }
    componentWillMount(){
        this.props.getCategories()
    };

    renderSelectBox = () => {
        const {categories} = this.props
        if(categories){
            return(
                <select className="form-control" value={this.state.selectedCategorie} onChange={(e)=>this.search(e)}>
                    {
                        categories.map(categorie => {
                            return (
                                <option key={categorie.id} value={categorie.name}>
                                    {categorie.name}
                                </option>
                            );
                        })
                    }
                </select>
            );
        }else{
            return <div>No categorie</div>
        }
    };

    search = (e) => {
        this.setState(
            {
                selectedCategorie: e.target.value
            }
            )
    };

    render(){
        return(
            <div>
                {this.renderSelectBox()}
            </div>
        );
    };
}

const mapStateToProps = (state) => {
    return {
        categories: state.categories
    }
};
const mapDispatchToProps = (dispatch) => {
    return {
        getCategories: bindActionCreators(getCategories, dispatch),
    }
};

export default connect(mapStateToProps,mapDispatchToProps)(CategorieList);