let $selectActive;
$(function(){
    $selectActive=$('$select-active');
    $('.switch').on('click', onClickSwitchPublished);
    $selectActive.onchange(onChangeFilter);
});

function onClickSwitchPublished(){
    const value=$(this).data('to');
    location.href=`/public/Usuario?active=${value}`
}

function onChangeFilter(){
    const active=$selectActive.val();
    location.href=`/public/Usuario?active=${active}`;
}
