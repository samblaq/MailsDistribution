var employeeObject = null; 
var notFoundMessageElement = null;
var showEmployeeForm = false;
var employeeIdHolder;
$('#employeeProfileElement').hide();

$(document).ready(()=>{

    $('#searchInput').on('keyup', function (e) {
        if(this.value){
            employeeIdHolder = this.value;
            return getEmployeeProfileData(this.value);
        }

        if(!notFoundMessageElement){
            $('#notFoundMsg').hide();
            $('#employeeProfileElement').show();
        }else{
            $('#notFoundMsg').show();
            $('#employeeProfileElement').hide();
        }

    });
});

function getEmployeeProfileData(employeeId) {
    $.ajax({
        type: 'GET',
        url: 'http://127.0.0.1:8000/api/employee/profile',
        data: {id: employeeId},
        statusCode: {
           404: function (responseObject, textStatus, jqXHR) {
               console.log('No employee id found');
           },

            503: function () {
               console.log('Service Unavailble');
            },
            500: function () {
                notFoundMessageElement = 'Employee not found';
            }
        }
    })
        .done(function (data) {
            $('#notFoundMsg').hide();
            $('#employeeProfileElement').show();
            employeeObject= data[0];
            $('#employeeName').text(employeeObject.name)
            $('#fullname').attr('value',employeeObject.name);
            $('#branch').attr('value',employeeObject.branch);
            $('#department').attr('value',employeeObject.department);
            // $('#unit').attr('value',employeeObject.unit);
            // $('#email').attr('value',employeeObject.email);
            // $('#region').attr('value',employeeObject.region);
            // $('#telephone').attr('value', employeeObject.telephone_number);
            // $('#email').attr('value',employeeObject.email);
            // $('#houseNumber').attr('value',employeeObject.house_number);


        })
        .fail(function (jqXHR, textStatus) {
            notFoundMessageElement = 'Employee with Id '+ employeeIdHolder + ' not found';
            $('#notFoundMsg').text(notFoundMessageElement);
            $('#employeeProfileElement').hide();
        })
        .always(function (jqXHR, textStatus) {
            console.log('Ajax finished');
        });
}


