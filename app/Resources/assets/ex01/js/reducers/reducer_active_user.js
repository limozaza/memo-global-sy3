import {USER_SELECTED} from '../actions/index'

const activeUserReducer = (state=null,action) => {
    console.log(state)
    switch (action.type){
        case USER_SELECTED:
            return action.payload;
    }
    return state;
}
export default activeUserReducer;
