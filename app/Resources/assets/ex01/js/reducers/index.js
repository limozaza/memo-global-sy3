/**
 * Created by zakaria on 22/12/17.
 */
import { combineReducers } from 'redux';

import usersReducer from './reducer_users';
import activeUserReducer from './reducer_active_user';
import categoriesReducer from './reducer_categories';

const rootReducer = combineReducers({
    users: usersReducer,
    activeUser: activeUserReducer,
    categories: categoriesReducer,

});

export default rootReducer;