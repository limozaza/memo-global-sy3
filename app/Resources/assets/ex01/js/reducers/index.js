/**
 * Created by zakaria on 22/12/17.
 */
import { combineReducers } from 'redux';

import usersReducer from './reducer_users';
import activeUserReducer from './reducer_active_user';
import categoriesReducer from './reducer_categories';
import articlesByCategorieReducer from './reducer_articles_by_categorie'

const rootReducer = combineReducers({
    users: usersReducer,
    activeUser: activeUserReducer,
    categories: categoriesReducer,
    articles: articlesByCategorieReducer

});

export default rootReducer;