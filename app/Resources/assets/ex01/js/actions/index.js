import $ from 'jquery';

export const USER_SELECTED = 'USER_SELECTED';
export const GET_CATEGORIES = "GET_CATEGORIES";
export const GET_ARTICLES = "GET_ARTICLES";

export const selectUser = (user) => {
    return {
        type: USER_SELECTED,
        payload: user
    }
}
export const getCategories = () => {
    return dispatch => {
        $.ajax(
            {
                type: "GET",
                url: "http://local.guide.fr/app_dev.php/react01/aja",
                success: function (data) {
                    dispatch({
                        type: GET_CATEGORIES,
                        payload: data
                    });
                }
            }
        )
    }
}


export const getCategorie = (categorie) => {
    return dispatch => {
        $.ajax(
            {
                type: "GET",
                url: "http://local.guide.fr/app_dev.php/react01/aja01",
                data: {
                    categorie: categorie
                },
                success: function (data) {
                    console.log("selected ", data)
                    dispatch({
                        type: GET_ARTICLES,
                        payload: data
                    });
                }
            }
        )
    }
}




