import React, {Component} from 'react';
import {connect} from 'react-redux';

import {bindActionCreators} from 'redux';
import {getCategorie} from '../actions/index';


class ArticleListByCategorie extends Component{


    componentWillMount(){
        this.props.getCategorie(this.props.defaultCategorie)
    };

    diplayArticle = ()=> {
        const {articles} = this.props;
        console.log(articles)
        if(articles){
            return (
                articles.map(article=>{
                    return (
                        <li key={article.id}>
                            <h3>{article.name}</h3>
                        </li>
                    );
                })
            );
        }
        else{
            return (
                <h3>bbbb</h3>
            );
        }
    }

    render() {
        return (
            <div>
                <ul>
                    {this.diplayArticle()}
                </ul>
            </div>
        );
    }
}

const mapStateToProps = (state) => {
    return {
        articles: state.articles
    }
};
const mapDispatchToProps = (dispatch) => {
    return {
        getCategorie: bindActionCreators(getCategorie, dispatch),
    }
};

export default connect(mapStateToProps,mapDispatchToProps)(ArticleListByCategorie);