function secondsToTime(seconds) {
    if(seconds === Infinity){
        return '∞'
    }
    return new Date(1000 * seconds)
        .toISOString()
        .substr(14, 5)
}

export {
    secondsToTime
}