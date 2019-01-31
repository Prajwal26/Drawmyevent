(
  function()
  {
    'use strict'

    angular.module("Simpleform",[])
    .controller("RegistrationController",RegistrationController);
    function RegistrationController() {
      var a=this;
      a.eventname="";

        console.log(a);
    }
  }
)()
