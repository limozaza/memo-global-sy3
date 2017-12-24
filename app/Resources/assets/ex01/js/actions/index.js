export const USER_SELECTED = 'USER_SELECTED'

export const selectUser = (user) => {
    console.log("selected ", user)

    return {
        type: USER_SELECTED,
        payload: user
    }
}

