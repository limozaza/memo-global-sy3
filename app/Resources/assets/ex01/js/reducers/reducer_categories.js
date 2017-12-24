import {GET_CATEGORIES} from '../actions/index'

const categoriesReducer = (state=null,action) => {
    switch (action.type){
        case GET_CATEGORIES:
            return action.payload;
    }
    return state;
}
export default categoriesReducer;
