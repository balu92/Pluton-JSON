<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pluton JSON stuff</title>
        <link href="/css/form.css" type="text/css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="vars.js"></script>
    </head>
    <body>
        <form id="form" action="json.php" method="post">
            <span class="title">TargetAssembly:
                <input type="text" name="TargetAssembly" value="Assembly-CS.dll" /></span>

            <span class="indentx1">Type:
                <input class="type" data-type="0" type="text" name="Types[Type0]" value="BasePlayer" /></span>

            <span class="indentx2">Method:
                <input type="text" data-type="0" name="Types[Type0][Methods][0][TargetMethod]" value="Die" /></span>

            <span class="title indentx2">Instruction:</span>

            <span class="indentx3">InstructionType:
                <select data-type="0" name="Types[Type0][Methods][0][Instructions][0][InstructionType]">
                    <option selected="selected">Append</option>
                    <option>Clear</option>
                    <option>InsertAfter</option>
                    <option>InsertBefore</option>
                    <option>InsertBeforeRet</option>
                    <option>RemoveAt</option>
                    <option>RemoveRange</option>
                </select></span>

            <span class="indentx3">OperandType:
                <select data-type="0" data-method="0" name="Types[Type0][Methods][0][Instructions][0][OperandType]">
                    <option>None</option>
                    <option>Instruction</option>
                    <option>Type</option>
                    <option>Method</option>
                    <option>Field</option>
                    <option>Parameter</option>
                    <option>Variable</option>
                    <option>SByte</option>
                    <option>Byte</option>
                    <option>Int</option>
                    <option>Float</option>
                    <option>Long</option>
                    <option>Double</option>
                    <option>String</option>
                </select></span>

            <span class="indentx3">OpCode:
                <select data-type="0" name="Types[Type0][Methods][0][Instructions][0][OpCode]">
                    <option>Nop</option>
                    <option>Ldlen</option>
                    <option>Ldelema</option>
                    <option>Ldelem_I1</option>
                    <option>Ldelem_U1</option>
                    <option>Ldelem_I2</option>
                    <option>Ldelem_U2</option>
                    <option>Ldelem_I4</option>
                    <option>Ldelem_U4</option>
                    <option>Ldelem_I8</option>
                    <option>Ldelem_I</option>
                    <option>Ldelem_R4</option>
                    <option>Ldelem_R8</option>
                    <option>Ldelem_Ref</option>
                    <option>Stelem_I</option>
                    <option>Stelem_I1</option>
                    <option>Stelem_I2</option>
                    <option>Stelem_I4</option>
                    <option>Stelem_I8</option>
                    <option>Stelem_R4</option>
                    <option>Stelem_R8</option>
                    <option>Stelem_Ref</option>
                    <option>Ldelem_Any</option>
                    <option>Stelem_Any</option>
                    <option>Newarr</option>
                    <option>Box</option>
                    <option>Conv_Ovf_U_Un</option>
                    <option>Conv_Ovf_I_Un</option>
                    <option>Cpobj</option>
                    <option>Ldobj</option>
                    <option>Ldstr</option>
                    <option>Newobj</option>
                    <option>Castclass</option>
                    <option>Isinst</option>
                    <option>Conv_R_Un</option>
                    <option>Unbox</option>
                    <option>Throw</option>
                    <option>Ldfld</option>
                    <option>Ldflda</option>
                    <option>Unbox_Any</option>
                    <option>Stfld</option>
                    <option>Ldsflda</option>
                    <option>Stsfld</option>
                    <option>Stobj</option>
                    <option>Conv_Ovf_I1_Un</option>
                    <option>Conv_Ovf_I2_Un</option>
                    <option>Conv_Ovf_I4_Un</option>
                    <option>Conv_Ovf_I8_Un</option>
                    <option>Conv_Ovf_U1_Un</option>
                    <option>Conv_Ovf_U2_Un</option>
                    <option>Conv_Ovf_U4_Un</option>
                    <option>Conv_Ovf_U8_Un</option>
                    <option>Ldsfld</option>
                    <option>Callvirt</option>
                    <option>Conv_Ovf_I1</option>
                    <option>Conv_Ovf_I2</option>
                    <option>Cgt_Un</option>
                    <option>Clt</option>
                    <option>Clt_Un</option>
                    <option>Ldftn</option>
                    <option>Ldvirtftn</option>
                    <option>Ldarg</option>
                    <option>Ldarga</option>
                    <option>Starg</option>
                    <option>Ldloc</option>
                    <option>Ldloca</option>
                    <option>Stloc</option>
                    <option>Localloc</option>
                    <option>Endfilter</option>
                    <option>Unaligned</option>
                    <option>Volatile</option>
                    <option>Tail</option>
                    <option>Initobj</option>
                    <option>Constrained</option>
                    <option>Cpblk</option>
                    <option>Initblk</option>
                    <option>No</option>
                    <option>Rethrow</option>
                    <option>Sizeof</option>
                    <option>Cgt</option>
                    <option>Ceq</option>
                    <option>Arglist</option>
                    <option>Conv_U</option>
                    <option>Conv_Ovf_U2</option>
                    <option>Conv_Ovf_I4</option>
                    <option>Conv_Ovf_U4</option>
                    <option>Conv_Ovf_I8</option>
                    <option>Conv_Ovf_U8</option>
                    <option>Refanyval</option>
                    <option>Ckfinite</option>
                    <option>Mkrefany</option>
                    <option>Ldtoken</option>
                    <option>Conv_U2</option>
                    <option>Conv_U1</option>
                    <option>Conv_Ovf_U1</option>
                    <option>Conv_I</option>
                    <option>Conv_Ovf_U</option>
                    <option>Add_Ovf</option>
                    <option>Add_Ovf_Un</option>
                    <option>Mul_Ovf</option>
                    <option>Mul_Ovf_Un</option>
                    <option>Sub_Ovf</option>
                    <option>Sub_Ovf_Un</option>
                    <option>Endfinally</option>
                    <option>Leave</option>
                    <option>Leave_S</option>
                    <option>Stind_I</option>
                    <option>Conv_Ovf_I</option>
                    <option>Refanytype</option>
                    <option>Conv_U8</option>
                    <option>Conv_R8</option>
                    <option>Ldc_I4_7</option>
                    <option>Ldc_I4_8</option>
                    <option>Ldc_I4_S</option>
                    <option>Ldc_I4</option>
                    <option>Ldc_I8</option>
                    <option>Ldc_R4</option>
                    <option>Ldc_R8</option>
                    <option>Dup</option>
                    <option>Pop</option>
                    <option>Jmp</option>
                    <option selected="selected">Call</option>
                    <option>Calli</option>
                    <option>Ret</option>
                    <option>Br_S</option>
                    <option>Brfalse_S</option>
                    <option>Brtrue_S</option>
                    <option>Beq_S</option>
                    <option>Bge_S</option>
                    <option>Bgt_S</option>
                    <option>Ble_S</option>
                    <option>Blt_S</option>
                    <option>Bne_Un_S</option>
                    <option>Bge_Un_S</option>
                    <option>Ldc_I4_6</option>
                    <option>Ldc_I4_5</option>
                    <option>Ldc_I4_4</option>
                    <option>Ldc_I4_3</option>
                    <option>Break</option>
                    <option>Ldarg_0</option>
                    <option>Ldarg_1</option>
                    <option>Ldarg_2</option>
                    <option>Ldarg_3</option>
                    <option>Ldloc_0</option>
                    <option>Ldloc_1</option>
                    <option>Ldloc_2</option>
                    <option>Ldloc_3</option>
                    <option>Stloc_0</option>
                    <option>Stloc_1</option>
                    <option>Bgt_Un_S</option>
                    <option>Stloc_2</option>
                    <option>Ldarg_S</option>
                    <option>Ldarga_S</option>
                    <option>Starg_S</option>
                    <option>Ldloc_S</option>
                    <option>Ldloca_S</option>
                    <option>Stloc_S</option>
                    <option>Ldnull</option>
                    <option>Ldc_I4_M1</option>
                    <option>Ldc_I4_0</option>
                    <option>Ldc_I4_1</option>
                    <option>Ldc_I4_2</option>
                    <option>Stloc_3</option>
                    <option>Conv_U4</option>
                    <option>Ble_Un_S</option>
                    <option>Br</option>
                    <option>Stind_I8</option>
                    <option>Stind_R4</option>
                    <option>Stind_R8</option>
                    <option>Add</option>
                    <option>Sub</option>
                    <option>Mul</option>
                    <option>Div</option>
                    <option>Div_Un</option>
                    <option>Rem</option>
                    <option>Rem_Un</option>
                    <option>And</option>
                    <option>Or</option>
                    <option>Xor</option>
                    <option>Shl</option>
                    <option>Shr</option>
                    <option>Shr_Un</option>
                    <option>Neg</option>
                    <option>Not</option>
                    <option>Conv_I1</option>
                    <option>Conv_I2</option>
                    <option>Conv_I4</option>
                    <option>Conv_I8</option>
                    <option>Conv_R4</option>
                    <option>Stind_I4</option>
                    <option>Stind_I2</option>
                    <option>Stind_I1</option>
                    <option>Stind_Ref</option>
                    <option>Brfalse</option>
                    <option>Brtrue</option>
                    <option>Beq</option>
                    <option>Bge</option>
                    <option>Bgt</option>
                    <option>Ble</option>
                    <option>Blt</option>
                    <option>Bne_Un</option>
                    <option>Bge_Un</option>
                    <option>Bgt_Un</option>
                    <option>Ble_Un</option>
                    <option>Blt_Un_S</option>
                    <option>Blt_Un</option>
                    <option>Ldind_I1</option>
                    <option>Ldind_U1</option>
                    <option>Ldind_I2</option>
                    <option>Ldind_U2</option>
                    <option>Ldind_I4</option>
                    <option>Ldind_U4</option>
                    <option>Ldind_I8</option>
                    <option>Ldind_I</option>
                    <option>Ldind_R4</option>
                    <option>Ldind_R8</option>
                    <option>Ldind_Ref</option>
                    <option>Switch</option>
                    <option>Readonly</option>
                </select></span>
            <span class="indentx3"><a id="addInstr" data-type="0" data-instr="0" data-method="0" href="#">Add new instruction</a></span>
            <span class="indentx2"><a id="addMethod" data-type="0" data-method="0" href="#">Add new method</a></span>
            <span class="indentx1"><a id="addType" href="#">Add new type</a></span>

            <br />
            <br />
            <span><input value="Generate JSON" type="submit" /></span>
        </form>
        <script>
            
            var next_type_num = 1;
            
            function stringStartsWith(string, prefix) {
                return string.slice(0, prefix.length) == prefix;
            }
            
            $(function () {
                $('#addType').click(function () {
                    var new_html = type_html.replace(/_NUM_/g, next_type_num);
                    $(this).parent().before(new_html);
                    next_type_num++;
                });
                
                $('#addMethod').click(function () {
                    var curtype = $(this).attr('data-type');
                    var next_method = +$(this).attr('data-method') + 1;
                    var new_html = method_html.replace(/_NUM_/g, curtype);
                    new_html = new_html.replace(/_MNUM_/g, next_method);
                    $(this).parent().before(new_html);
                    $(this).attr('data-method', parseInt($(this).attr('data-method')) + 1);
                });
                
                $('#addInstr').click(function () {
                    var curtype = $(this).attr('data-type');
                    var cur_method = +$(this).attr('data-method') + 1;
                    var next_instr = +$(this).attr('data-instr') + 1;
                    var new_html = instr_html.replace(/_NUM_/g, curtype);
                    new_html = new_html.replace(/_MNUM_/g, cur_method);
                    new_html = new_html.replace(/_INUM_/g, next_instr);
                    $(this).parent().before(new_html);
                    $(this).attr('data-instr', parseInt($(this).attr('data-instr')) + 1);
                });
                
                $(document).on('change', 'select', function () {
                    var selname = $(this).attr('name');
                    if (selname.indexOf("OperandType") > -1) {
                        var TypeNum = $(this).attr('data-type');
                        if (this.value == "Method") {
                            var cur_method = $(this).attr('data-method');
                            var new_html = method_select.replace(/_NUM_/g, TypeNum);
                            new_html = new_html.replace(/_MNUM_/g, cur_method);
                            $(this).parent().after(new_html);
                        }
                        else {
                            $("span").each(function () {
                                if (!$(this).hasClass("title")) {
                                    if (stringStartsWith($(this).html(), "TargetAssembly:") || stringStartsWith($(this).html(), "TargetType:") || stringStartsWith($(this).html(), "TargetMethod:")) {
                                        $(this).remove();
                                    }
                                }
                            });
                        }   
                    }
                });
                
                $('#form').on('submit', function (e) {
                    $('input[class="type"]').each(function (index) {
                        var elm = $(this);
                        var Type = elm.val();
                        $('input[name^="Types[Type' + index + ']"]').filter(':input').each(function () {
                            var name = $(this).attr('name');
                            var newname = name.replace("Type" + index, Type);
                            $(this).attr('name', newname);
                        });
                        $('select[name^="Types[Type' + index + ']"]').filter(':input').each(function () {
                            var name = $(this).attr('name');
                            var newname = name.replace("Type" + index, Type);
                            $(this).attr('name', newname);
                        });
                    });
                    this.target = 'jsonresult';
                    window.parent.resizeFrame('*,250');
                });
            });
        </script>
    </body>
</html>
