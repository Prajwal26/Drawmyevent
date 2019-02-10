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

  serve.update=function(table,index,parameter){
    console.log(table,index,parameter);
    var response=$http({
      method: 'post',
      url: 'seen.php',
      data:
      {
        per:index,
        table:table,
        para:parameter
      },
    }).then(function successCallback(response) {
      console.log(response);

    });
};
};
})()
//
//   serve.update=function(table,index){
//     console.log(table,index);
//     var response=$http({
//       method: 'post',
//       url: 'seen.php',
//       data:
//       {
//         table:table,
//         personid:index
//       },
//     }).then(function successCallback(response) {
//       console.log(response);
//
//     });
// };
