<?php
$news = News::all();
?>
<table class='table table-striped table-responsive' id='newstable'>

    <thead>
    <tr>
        <th>News</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <?php $i = 1; ?>
        @foreach($news as $news)
            <td >
                <div class="col-xs-12">
                    <div class="col-sm-8" style="font-size: 12px">
                        <div class="col-xs-6">
                            Contents : <strong>{{$news->contents}}</strong><br><br>
                            date : <strong>{{ $news->date }}</strong>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 links" id="{{ $news->id }}">
                    <a href="#a" title="edit Service" class="editroom btn btn-xs btn-info"><i class="fa fa-pencil text-info"></i> edit</a>&nbsp;&nbsp;&nbsp;
                    <a href="#s" title="delete Service" class="deleteroom btn btn-xs btn-danger"><i class="fa fa-trash-o text-info"></i> delete</a>&nbsp;&nbsp;&nbsp;
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle btn-xs" data-toggle="dropdown">
                            Services<span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li id="{{ $news->id }}"><a href="#s" class='addguest'><i class="fa fa-plus-square-o "></i> Add</a></li>
                            <li id="{{ $news->id }}"><a href="#" class='listguest'><i class="fa fa-th"></i> List</a></li>
                        </ul>
                    </div>
                </div>

            </td>
    </tr>
    @endforeach

    </tbody>
</table>

<!--script to process the list of rooms-->
<script>
    $(document).ready(function (){

        $("#newstable").dataTable({
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",
            "fnDrawCallback": function( oSettings ) {
//               $("#stafftable").find("td.links a").hide();
//               $("#stafftable").find("tr").hover(function(){
//                   $(this).find("td.links a").show()
//               },function(){
//                   $(this).find("td.links a").hide();
//               })
                $(".editnews").click(function(){
                    var id1 = $(this).parent().attr('id');
                    $("#addnews").html("<br><i class='fa fa-spinner fa-spin'></i>loading...");
                    $("#addnews").load("<?php echo url("news/edit") ?>/"+id1);
                })


                //deleting a room
                $(".deletenews").click(function(){
                    var id1 = $(this).parent().attr('id');
                    $(".deletenews").show("slow").parent().parent().find("span").remove();
                    var btn = $(this).parent().parent().parent();
                    $(this).hide("slow").parent().append("<span><br>Are You Sure <br /> <a href='#s' id='yes' class='btn btn-success btn-xs'><i class='fa fa-check'></i> Yes</a> <a href='#s' id='no' class='btn btn-danger btn-xs'> <i class='fa fa-times'></i> No</a></span>");
                    $("#no").click(function(){
                        $(this).parent().parent().find(".deletenews").show("slow");
                        $(this).parent().parent().find("span").remove();
                    });
                    $("#yes").click(function(){
                        $(this).parent().html("<br><i class='fa fa-spinner fa-spin'></i>deleting...");
                        $.post("<?php echo url("news/delete")?>/"+id1,function(data){
                            btn.hide("slow").next("hr").hide("slow");
                        });
                    });
                });//endof deleting category
            }
        });
        $('input[type="text"]').addClass("form-control");
        $('select').addClass("form-control");


    });
</script>

