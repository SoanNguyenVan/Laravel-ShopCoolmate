//ajax setup
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
//end ajaxSetup



const bigLi = document.querySelectorAll('.mina-admin-left-content > ul >li>a.a-contain-sub');
for (let i = 0; i < bigLi.length; i++) {
    bigLi[i].addEventListener('click', (event) => {

        event.preventDefault()
        // bigLi[i].parentElement.classList.add('active')
        for (let a = 0; a < bigLi.length; a++) {
            bigLi[a].parentNode.querySelector('ul').setAttribute('style', 'height: 0px')


        }
        var ulHeight = bigLi[i].parentNode.querySelector('ul>div').offsetHeight
        bigLi[i].parentElement.querySelector('ul').setAttribute('style', 'height: ' + ulHeight + 'px')

        // console.log(ulHeight)
    })

}
// window.addEventListener('click', (event) => {
//     if (event.target != document.querySelector('.mina-admin-left-content > ul >li>a.a-contain-sub').children) {
//         for (let a = 0; a < bigLi.length; a++) {
//             bigLi[a].parentNode.querySelector('ul').setAttribute('style', 'height: 0px')


//         }
//     }
// })

//ajax
$('#file').on('change',()=>{
 var formData = new FormData();
 var file = $('#file')[0].files[0]
  formData.append('file',file)

 $.ajax({
    url : '/upload/store',
    processData: false,//illega invocation
    dataType: 'json',
    data: formData,
    method: 'POST',
    contentType: false,// khong hien o preview
    success: function(result){
        if(result.success == true){
        html = '';
        html+= '<img src="'+result.url+'" alt="">';
        $('#input-file-img').html(html)
        $('#product-image').val(result.url)
        }
       
    }

 })
})

$('#files').on('change',()=>{
    var formData = new FormData()
    var files = $('#files')[0].files
    for (let index = 0; index < files.length; index++) {
        formData.append('files[]',files[index])
        
    }

    $.ajax({
        url:'/upload/stores',
        method: 'POST',
        dataType: 'JSON',
        data: formData,
        contentType: false,
        processData: false,
        success:function(result){
            if(result.success = true) {
                html =''
                for (let index = 0; index < result.url.length; index++) {
                   html+=
                   '<img src="'+result.url[index]+'" alt=""><input type="hidden" value="'+result.url[index]+'" class="product-images" name="product_images[]">'
                   $('#input-file-imgs').html(html)
                //    $('.product-images').val(result.url[index])
                }
            }
        }

    })

})

//delete row
function removerow(id,url){
    if(confirm('You sure?')) {
      $.ajax({
        url:url,
        data:{id},
        method:'GET',
        success: function(res){
           if(res.success = true){
            alert('Delete success')
            location.reload()
           }
        }
      })
    }
}