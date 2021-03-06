<?php
$team = Team::all();
?>
<table class='table table-striped table-responsive' id='teamtable'>

    <thead>
    <tr>
        <th>Team</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <?php $i = 1; ?>
        @foreach($team as $team)
            <td >
                <div class="col-xs-12">
                    <div class="col-sm-5">
                        @if($team->image == "")
                            {{ HTML::image("http://placehold.it/100x100","",array('class'=>'img-rounded')) }}
                        @else
                            {{ HTML::image("uploads/team/{$team->image}","",array('class'=>'img-rounded thumbnail','style'=>'height:100px;width:100px')) }}
                        @endif
                    </div>
                    <div class="col-sm-7" style="font-size: 12px">
                        <div class="col-xs-8">
                            Name : <strong>{{$team->name}}</strong><br>
                            Title : <strong>{{ $team->title }}</strong><br>
                            Phone : <strong>{{ $team->phone }}</strong><br>
                            Email : <strong>{{ $team->email }}</strong>
                            Details : <strong>{{ $team->descriptions }}</strong>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 links" id="{{ $team->id }}">
                        <a href="#a" title="edit Member" class="editteam btn btn-xs btn-info"><i class="fa fa-pencil text-info"></i> edit</a>&nbsp;&nbsp;&nbsp;
                        <a href="#s" title="delete Member" class="deleteteam btn btn-xs btn-danger"><i class="fa fa-trash-o text-info"></i> delete</a>&nbsp;&nbsp;&nbsp;
                    <div class="btn-group">

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

        $("#teamtable").dataTable({
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",
            "fnDrawCallback": function( oSettings ) {
//               $("#stafftable").find("td.links a").hide();
//               $("#stafftable").find("tr").hover(function(){
//                   $(this).find("td.links a").show()
//               },function(){
//                   $(this).find("td.links a").hide();
//               })
                $(".editteam").click(function(){
                    var id1 = $(this).parent().attr('id');
                    $("#addteam").html("<br><i class='fa fa-spinner fa-spin'></i>loading...");
                    $("#addteam").load("<?php echo url("team/edit") ?>/"+id1);
                })


                //deleting a team
                $(".deleteteam").click(function(){
                    var id1 = $(this).parent().attr('id');
                    $(".deleteteam").show("slow").parent().parent().find("span").remove();
                    var btn = $(this).parent().parent().parent();
                    $(this).hide("slow").parent().append("<span><br>Are You Sure <br /> <a href='#s' id='yes' class='btn btn-success btn-xs'><i class='fa fa-check'></i> Yes</a> <a href='#s' id='no' class='btn btn-danger btn-xs'> <i class='fa fa-times'></i> No</a></span>");
                    $("#no").click(function(){
                        $(this).parent().parent().find(".deleteteam").show("slow");
                        $(this).parent().parent().find("span").remove();
                    });
                    $("#yes").click(function(){
                        $(this).parent().html("<br><i class='fa fa-spinner fa-spin'></i>deleting...");
                        $.post("<?php echo url("team/delete")?>/"+id1,function(data){
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

