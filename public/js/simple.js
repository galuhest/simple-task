var iterator = 1;

function insert()   {
    var desc = $('#desc').val()
    var date_start = $('#dates').val()
    var date_end = $('#datet').val()
    var prior = $('#prior option:selected').val()

    var raw = generateRaw(desc,date_start,date_end,prior)
    console.log(desc, date_start, date_end, prior);
    $('.tasks').html($('.tasks').html()+raw)
    $('.datepicker').datepicker('destroy')
    $(".datepicker").datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: "yy-mm-dd"
    });
}

var priority = ["Rendah","Sedang","Tinggi"];

function generateRaw(d, s, e, n) {
    var select = "";
    for(var i = 1; i <= 3; i++) {
        if(i == n)
            select += '<option value=\"'+n+'\" selected>'+priority[i-1]+'</option>';
        else {
            select += '<option value=\"'+n+'\">'+priority[i-1]+'</option>';
        }
    }
    var raw = '<div class="task" id="'+ iterator +'"><div class="row"><div class="col-md-1 col-sm-1"><input type="checkbox"></div><div class="col-md-10 col-sm-10"><input type="text" class="description style form-control" value="'+ d
    +'" /></div></div><br/><div class="row"><div class="col-md-3 col-sm-3 col-md-offset-1 col-sm-offset-1"><input type="text" class=" style datepicker form-control" value="'+ s
    +'"/></div><div class="col-md-3 col-sm-3"><input type="text" class="datepicker style form-control" value="'+e
    +'"/></div><div class="col-md-2 col-sm-2"><select class="form-control">'+select
    +'</select></div><div class="col-md-2 col-sm-2"><button class="btn btn-danger" onclick="destroy('+iterator+')">Hapus</button></div></div></div><hr/>'
    iterator++;
    return raw;
}

function destroy(n) {
    console.log("asd");
    var target = $('.tasks').find('#'+n)

    target.remove();
}
