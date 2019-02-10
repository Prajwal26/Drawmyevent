(function () {
  angular.module("myApp")
.service("mainService",mainService);
mainService.$inject=['$http'];
function mainService($http) {
    var serve=this;
    serve.show=function(fileName) {
    var response = $http({
        method:'post',
        url:fileName
      });
    return response;
    };
    serve.remove = function(table,parameter,index){
      console.log(table,parameter,index);
      var response=$http({
   method: 'post',
   url: 'delete.php',
   data: {
     table:table,
     param:parameter,
     personid:index
   },
  }).then(function successCallback(response) {
   
   console.log(response);
  });
};
};
})()
