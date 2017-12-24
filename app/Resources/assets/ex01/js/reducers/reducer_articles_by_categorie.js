import {GET_ARTICLES} from '../actions/index'

const articlesByCategorieReducer = (state=null,action) => {
    switch (action.type){
        case GET_ARTICLES:
            return action.payload;
    }
    return state;
}
export default articlesByCategorieReducer;
