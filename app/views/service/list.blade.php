<?php
$service = Service::all();
?>
<table class='table table-striped table-responsive' id='servicetable'>

    <thead>
    <tr>
        <th>service</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <?php $i = 1; ?>
        @foreach($service as $service)
            <td >
                <div class="col-xs-12">
                    <div class="col-sm-5">
                        @if($service->image == "")
                            {{ HTML::image("http://placehold.it/100x100","",array('class'=>'img-rounded')) }}
                        @else
                            {{ HTML::image("uploads/service/{$service->image}","",array('class'=>'img-rounded thumbnail','style'=>'height:100px;width:100px')) }}
                        @endif
                    </div>
                    <div class="col-sm-7" style="font-size: 12px">
                        <div class="col-xs-8">
                            Name : <strong>{{$service->name}}</strong><br>
                            Details : <strong>{{ $service->descriptions }}</strong>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 links" id="{{ $service->id }}">
                    <a href="#a" title="edit Service" class="editservice btn btn-xs btn-info"><i class="fa fa-pencil text-info"></i> edit</a>&nbsp;&nbsp;&nbsp;
                    <a href="#s" title="delete Service" class="deleteservice btn btn-xs btn-danger"><i class="fa fa-trash-o text-info"></i> delete</a>&nbsp;&nbsp;&nbsp;
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

        $("#servicetable").dataTable({
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",
            "fnDrawCallback": function( oSettings ) {
//               $("#stafftable").find("td.links a").hide();
//               $("#stafftable").find("tr").hover(function(){
//                   $(this).find("td.links a").show()
//               },function(){
//                   $(this).find("td.links a").hide();
//               })
                $(".editservice").click(function(){
                    var id1 = $(this).parent().attr('id');
                    $("#addservice").html("<br><i class='fa fa-spinner fa-spin'></i>loading...");
                    $("#addservice").load("<?php echo url("service/edit") ?>/"+id1);
                })


                //deleting a service
                $(".deleteservice").click(function(){
                    var id1 = $(this).parent().attr('id');
                    $(".deleteservice").show("slow").parent().parent().find("span").remove();
                    var btn = $(this).parent().parent().parent();
                    $(this).hide("slow").parent().append("<span><br>Are You Sure <br /> <a href='#s' id='yes' class='btn btn-success btn-xs'><i class='fa fa-check'></i> Yes</a> <a href='#s' id='no' class='btn btn-danger btn-xs'> <i class='fa fa-times'></i> No</a></span>");
                    $("#no").click(function(){
                        $(this).parent().parent().find(".deleteservice").show("slow");
                        $(this).parent().parent().find("span").remove();
                    });
                    $("#yes").click(function(){
                        $(this).parent().html("<br><i class='fa fa-spinner fa-spin'></i>deleting...");
                        $.post("<?php echo url("service/delete")?>/"+id1,function(data){
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

