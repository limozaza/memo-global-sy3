/**
 * Created by zakaria on 22/12/17.
 */
import { combineReducers } from 'redux';

import usersReducer from './reducer_users';
import activeUserReducer from './reducer_active_user';

const rootReducer = combineReducers({
    users: usersReducer,
    activeUser: activeUserReducer
});

export default rootReducer;