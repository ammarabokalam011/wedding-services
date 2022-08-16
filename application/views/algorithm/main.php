<?php $this->load->view('include/header'); ?>
<input id="num" type="number" value="0">
<button id="set-form">Set</button>
<button id="add-one">Add</button>
<style>
    input.form-control {
        width: auto;
    }
</style>
<form action="<?php  echo base_url('algorithm/add');?>" method="post">
    <p><select required name="hall"  class="form-control">
            <?php
                foreach ($halls as $hall){
                    echo "<option value='$hall->hall_id'>$hall->hall_name</option>";
                }
            ?>
        </select>
    </p>

    <div class="table-responsive">
        <table id="form" border="1" class="table">
            <thead>
                <td>geust name</td>
                <td>geust age</td>
                <td>geust relation</td>
                <td>with groom or bride</td>
                <td>priority</td>
                <td>gender</td>
            </thead>
            <tbody id="form-body">
            <tr id="submit">
                <td colspan="6">
                    <input type="submit" class="form-control" style="width: 100%" value="Submit" >
                </td>
            </tr>
            </tbody>

        </table>
    </div>

</form>

<script>
    var number=0;
    document.getElementById('add-one').onclick=
        function(){
            var i=number;
            var tr=document.createElement("tr");
            td=document.createElement("td");
            td.innerHTML='<input type="text" value="geust name" name="geust_name[]" class="form-control" required>';
            tr.appendChild(td);
            td=document.createElement("td");
            td.innerHTML='<input type="number" min="5" value="geust age" name="geust_age[]" class="form-control" required>';
            tr.appendChild(td);
            td=document.createElement("td");
            td.innerHTML='<p><select name="relation[]"  class="form-control" required><option value="1">perent</option><option value="2">sibling</option><option value="3">grand</option><option value="4">uncle(father)</option><option value="5">uncle(mother)</option><option value="6">Nephew</option><option value="7">cousin(father)</option><option value="8">cousin(mother)</option><option value="9">close friend</option><option value="10">friend</option><option value="11">other</option></select></p>';
            tr.appendChild(td);
            td=document.createElement("td");
            td.innerHTML='<p><select required name="groomOrBride[]"  class="form-control"><option value="0">Groom</option><option value="1">Bride</option><option value="2">other</option></select></p>';
            tr.appendChild(td);

            td=document.createElement("td");
            td.innerHTML='<input required type="number" min="0" max="100" value="" name="priority[]" class="form-control">';
            tr.appendChild(td);

            td=document.createElement("td");
            td.innerHTML='<p><select required name="gender[]"  class="form-control"><option value="1">Male</option><option value="0">Female</option></select></p>';
            tr.appendChild(td);

            number++;
            var sub=$('#submit');
            $(tr).insertBefore(sub);
        };
    document.getElementById('set-form').onclick=
        function () {
            var f = document.getElementById("form");
            var i=0;
            var num=document.getElementById('num').value;
            var td,s;
            number=num;
            for(;i<num;i++){
                var tr=document.createElement("tr");
                td=document.createElement("td");
                td.innerHTML='<input type="text" value="geust name" name="geust_name[]" class="form-control" required>';
                tr.appendChild(td);
                td=document.createElement("td");
                td.innerHTML='<input type="number" min="5" value="geust age" name="geust_age[]" class="form-control" required>';
                tr.appendChild(td);
                td=document.createElement("td");
                td.innerHTML='<p><select name="relation[]"  class="form-control" required><option value="1">perent</option><option value="2">sibling</option><option value="3">grand</option><option value="4">uncle(father)</option><option value="5">uncle(mother)</option><option value="6">Nephew</option><option value="7">cousin(father)</option><option value="8">cousin(mother)</option><option value="9">close friend</option><option value="10">friend</option><option value="11">other</option></select></p>';
                tr.appendChild(td);
                td=document.createElement("td");
                td.innerHTML='<p><select name="groomOrBride[]"  class="form-control" required><option value="g">Groom</option><option value="b">Bride</option><option value="o">other</option></select></p>';
                tr.appendChild(td);

                td=document.createElement("td");
                td.innerHTML='<input type="number" min="0" max="100" value="geust age" name="priority[]" class="form-control" required>';
                tr.appendChild(td);

                td=document.createElement("td");
                td.innerHTML='<p><select required name="gender[]"  class="form-control"><option value="M">Male</option><option value="F">Female</option></select></p>';
                tr.appendChild(td);

                var sub=$('#submit');
                $(tr).insertBefore(sub);
            }
        };

    //and some more input elements here
    //and dont forget to add a submit button


</script>
</html>
