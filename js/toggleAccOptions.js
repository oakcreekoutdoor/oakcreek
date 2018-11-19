$(function() {
    
    function toggleActiveAcc(activeAcc, notActiveAcc, catActive, catNotActive) {
        $(activeAcc).addClass('actAccNav');
        $(notActiveAcc).removeClass();
        $(catActive).css('display', 'inline-block');
        $(catNotActive).css('display', 'none');
    }
    
    
    $('#accProfileNav').on('click', function() {
        toggleActiveAcc($(this), '#accOrderNav', '#account', '#orderHistory');
        return false;
    });
    
    $('#accOrderNav').on('click', function() {
        toggleActiveAcc($(this), '#accProfileNav', '#orderHistory', '#account');
        return false;
    });
});