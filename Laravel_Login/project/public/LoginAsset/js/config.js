function ErrorToast(msg) {
    toastr.options.positionClass = 'toast-bottom-center';
    toastr.options.showEasing = 'swing';
    toastr.options.timeOut = 100;
    toastr.error(msg);
}

// Function Success Toast Messsage
function SuccessToast(msg) {
    toastr.options.positionClass = 'toast-bottom-center';
    toastr.options.showEasing = 'swing';
    toastr.success(msg);
}



//Global Variable
var EmailRegx = /\S+@\S+\.\S+/;
var MobileRegx = /^(?:\+?88|0088)?01[15-9]\d{8}$/;

