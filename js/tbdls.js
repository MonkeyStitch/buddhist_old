
// confirm delete
$('.btnConfirmDelete').click(function(e) {
    e.preventDefault(); // หยุดการทำงาน
    var form = $(this).parents('form');
    $.smkConfirm({
        text:'คุณต้องการลบข้อมูลนี้หรือไม่ ?',
        accept:'ใช่ ลบข้อมูล',
        cancel:'ไม่'
    },function(res){
        // Code here
        if (res) {
            form.submit();
        }
    });
});
