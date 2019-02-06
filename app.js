(
  function()
  {
    'use strict'

    angular.module("myApp",[])
    .controller("customersCtrl",customersCtrl)
    .controller("eventContoller",eventContoller)
    .controller("dataController",dataController);

    customersCtrl.$inject = ['mainService'];
    function customersCtrl(mainService) {
      var customer = this;
      var data=mainService.show("person.php");

      data.then(function (s) {
          customer.names=s.data.records;
        },
        function (e) {
          console.log(e);
        }
      );
      customer.del=function(x,y,z,index)
      {
        mainService.remove(x,y,z);
        console.log(index);
        customer.names.splice(index,1);
      };

    };
    eventContoller.$inject = ['mainService'];
    function eventContoller(mainService) {
      var customer = this;
      var data=mainService.show("event_table.php");
      data.then(function (s) {
        console.log(s);
        customer.names=s.data.records;
      },
      function (e) {
        console.log(e);
      }
    );
    customer.del=function(x,y,z,index) {
      mainService.remove(x,y,z);
      console.log(index);
      customer.names.splice(index,1);

    };
    customer.up=function(x,index) {
      mainService.up(x,index);
      console.log(index);
      

    };


    };

    dataController.$inject = ['mainService'];
    function dataController(mainService) {
      var customer = this;
      var data=mainService.show("data_table.php");
      data.then(function (s) {
        console.log(s);
        customer.names=s.data.records;
      },
      function (e) {
        console.log(e);
      }
    );
    customer.del=function(x,y,z,index) {
      mainService.remove(x,y,z);
      console.log(index);
      customer.names.splice(index,1);

    };

    };
  }
)()
