<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pluton JSON stuff</title>
        <link href="./css/form.css" type="text/css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="vars.js"></script>
        <script src="download.js"></script>
		<link href="https://cdn.rawgit.com/lmenezes/json-tree/master/dist/css/jsontree.css" rel="stylesheet">
        <script src="https://cdn.rawgit.com/lmenezes/json-tree/master/dist/js/jsontree.min.js"></script>
		<style>
		.jstValue {font-size: 13px !important;}
		</style>
    </head>
    <body>
        <form id='form' action='javascript:;'>
			<span class="title">Load config:
				<input type="file" id="loadJSON" name="files[]" multiple /></span>
			<span class="title">
				<button id="SaveJSON" onclick="download(JSON.stringify(Patchie, null, '    '), 'patch.json', 'text/plain');">Save configuration</button></span>
				
            <span class="title">TargetAssembly:
                <input type="text" name="TargetAssembly" value="Assembly-CS.dll" /></span>

            <span class="indentx1">Type:
                <input class="type" data-type="0" type="text" name="TargetType" value="BasePlayer" /></span>

            <span class="indentx2">Method:
                <input type="text" data-type="0" name="TargetMethod" value="Die" /></span>

            <span class="indentx2">MethodSigniture:
                <input type="text" data-type="0" name="TargetMethodSign" value="" /></span>

            <span class="title indentx2">Instruction:</span>

            <span class="indentx3">InstructionType:
                <select data-type="0" name="InstructionType">
                    <option>Append</option>
                    <option selected="selected">Clear</option>
                    <option>InsertAfter</option>
                    <option>InsertBefore</option>
                    <option>InsertBeforeRet</option>
                    <option>RemoveAt</option>
                    <option>RemoveRange</option>
                </select></span>
			<optionalFields>
			</optionalFields>
            
            <span class="indentx3"><a id="addInstr" data-type="0" data-instr="0" data-method="0" href="javascript:;">Add new instruction</a></span>
            <span class="indentx2"><a id="addMethod" data-type="0" data-method="0" href="javascript:;">Add new method</a></span>
            <span class="indentx1"><a id="addType" href="javascript:;">Add new type</a></span>

            <br />
            <br />
            <span><input value="Generate JSON" type="submit" /></span>
        </form>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<pre>
<jsonoutput>
</jsonoutput>
		</pre>
        <script>
		
            // html for the optional input fields
			var OptionalFields = {
				Operand: '<span class="indentx3">Operand: <input data-type="0" name="Operand" type="text" /></span>',
				OperandType: '<span class="indentx3">OperandType: <select data-type="0" data-method="0" name="OperandType"><option>None</option> <option>Instruction</option> <option>Type</option> <option>Method</option> <option>Field</option> <option>Parameter</option> <option>Variable</option> <option>SByte</option> <option>Byte</option> <option>Int</option> <option>Float</option> <option>Long</option> <option>Double</option> <option>String</option></select></span>',
				OpCode: '<span class="indentx3">OpCode: <select data-type="0" name="OpCode"><option>Nop</option> <option>Ldlen</option> <option>Ldelema</option> <option>Ldelem_I1</option> <option>Ldelem_U1</option> <option>Ldelem_I2</option> <option>Ldelem_U2</option> <option>Ldelem_I4</option> <option>Ldelem_U4</option> <option>Ldelem_I8</option> <option>Ldelem_I</option> <option>Ldelem_R4</option> <option>Ldelem_R8</option> <option>Ldelem_Ref</option> <option>Stelem_I</option> <option>Stelem_I1</option> <option>Stelem_I2</option> <option>Stelem_I4</option> <option>Stelem_I8</option> <option>Stelem_R4</option> <option>Stelem_R8</option> <option>Stelem_Ref</option> <option>Ldelem_Any</option> <option>Stelem_Any</option> <option>Newarr</option> <option>Box</option> <option>Conv_Ovf_U_Un</option> <option>Conv_Ovf_I_Un</option> <option>Cpobj</option> <option>Ldobj</option> <option>Ldstr</option> <option>Newobj</option> <option>Castclass</option> <option>Isinst</option> <option>Conv_R_Un</option> <option>Unbox</option> <option>Throw</option> <option>Ldfld</option> <option>Ldflda</option> <option>Unbox_Any</option> <option>Stfld</option> <option>Ldsflda</option> <option>Stsfld</option> <option>Stobj</option> <option>Conv_Ovf_I1_Un</option> <option>Conv_Ovf_I2_Un</option> <option>Conv_Ovf_I4_Un</option> <option>Conv_Ovf_I8_Un</option> <option>Conv_Ovf_U1_Un</option> <option>Conv_Ovf_U2_Un</option> <option>Conv_Ovf_U4_Un</option> <option>Conv_Ovf_U8_Un</option> <option>Ldsfld</option> <option>Callvirt</option> <option>Conv_Ovf_I1</option> <option>Conv_Ovf_I2</option> <option>Cgt_Un</option> <option>Clt</option> <option>Clt_Un</option> <option>Ldftn</option> <option>Ldvirtftn</option> <option>Ldarg</option> <option>Ldarga</option> <option>Starg</option> <option>Ldloc</option> <option>Ldloca</option> <option>Stloc</option> <option>Localloc</option> <option>Endfilter</option> <option>Unaligned</option> <option>Volatile</option> <option>Tail</option> <option>Initobj</option> <option>Constrained</option> <option>Cpblk</option> <option>Initblk</option> <option>No</option> <option>Rethrow</option> <option>Sizeof</option> <option>Cgt</option> <option>Ceq</option> <option>Arglist</option> <option>Conv_U</option> <option>Conv_Ovf_U2</option> <option>Conv_Ovf_I4</option> <option>Conv_Ovf_U4</option> <option>Conv_Ovf_I8</option> <option>Conv_Ovf_U8</option> <option>Refanyval</option> <option>Ckfinite</option> <option>Mkrefany</option> <option>Ldtoken</option> <option>Conv_U2</option> <option>Conv_U1</option> <option>Conv_Ovf_U1</option> <option>Conv_I</option> <option>Conv_Ovf_U</option> <option>Add_Ovf</option> <option>Add_Ovf_Un</option> <option>Mul_Ovf</option> <option>Mul_Ovf_Un</option> <option>Sub_Ovf</option> <option>Sub_Ovf_Un</option> <option>Endfinally</option> <option>Leave</option> <option>Leave_S</option> <option>Stind_I</option> <option>Conv_Ovf_I</option> <option>Refanytype</option> <option>Conv_U8</option> <option>Conv_R8</option> <option>Ldc_I4_7</option> <option>Ldc_I4_8</option> <option>Ldc_I4_S</option> <option>Ldc_I4</option> <option>Ldc_I8</option> <option>Ldc_R4</option> <option>Ldc_R8</option> <option>Dup</option> <option>Pop</option> <option>Jmp</option> <option selected="selected">Call</option> <option>Calli</option> <option>Ret</option> <option>Br_S</option> <option>Brfalse_S</option> <option>Brtrue_S</option> <option>Beq_S</option> <option>Bge_S</option> <option>Bgt_S</option> <option>Ble_S</option> <option>Blt_S</option> <option>Bne_Un_S</option> <option>Bge_Un_S</option> <option>Ldc_I4_6</option> <option>Ldc_I4_5</option> <option>Ldc_I4_4</option> <option>Ldc_I4_3</option> <option>Break</option> <option>Ldarg_0</option> <option>Ldarg_1</option> <option>Ldarg_2</option> <option>Ldarg_3</option> <option>Ldloc_0</option> <option>Ldloc_1</option> <option>Ldloc_2</option> <option>Ldloc_3</option> <option>Stloc_0</option> <option>Stloc_1</option> <option>Bgt_Un_S</option> <option>Stloc_2</option> <option>Ldarg_S</option> <option>Ldarga_S</option> <option>Starg_S</option> <option>Ldloc_S</option> <option>Ldloca_S</option> <option>Stloc_S</option> <option>Ldnull</option> <option>Ldc_I4_M1</option> <option>Ldc_I4_0</option> <option>Ldc_I4_1</option> <option>Ldc_I4_2</option> <option>Stloc_3</option> <option>Conv_U4</option> <option>Ble_Un_S</option> <option>Br</option> <option>Stind_I8</option> <option>Stind_R4</option> <option>Stind_R8</option> <option>Add</option> <option>Sub</option> <option>Mul</option> <option>Div</option> <option>Div_Un</option> <option>Rem</option> <option>Rem_Un</option> <option>And</option> <option>Or</option> <option>Xor</option> <option>Shl</option> <option>Shr</option> <option>Shr_Un</option> <option>Neg</option> <option>Not</option> <option>Conv_I1</option> <option>Conv_I2</option> <option>Conv_I4</option> <option>Conv_I8</option> <option>Conv_R4</option> <option>Stind_I4</option> <option>Stind_I2</option> <option>Stind_I1</option> <option>Stind_Ref</option> <option>Brfalse</option> <option>Brtrue</option> <option>Beq</option> <option>Bge</option> <option>Bgt</option> <option>Ble</option> <option>Blt</option> <option>Bne_Un</option> <option>Bge_Un</option> <option>Bgt_Un</option> <option>Ble_Un</option> <option>Blt_Un_S</option> <option>Blt_Un</option> <option>Ldind_I1</option> <option>Ldind_U1</option> <option>Ldind_I2</option> <option>Ldind_U2</option> <option>Ldind_I4</option> <option>Ldind_U4</option> <option>Ldind_I8</option> <option>Ldind_I</option> <option>Ldind_R4</option> <option>Ldind_R8</option> <option>Ldind_Ref</option> <option>Switch</option> <option>Readonly</option> </select></span>',
				RemoveEnd: '<span class="indentx3">RemoveEnd: <input data-type="0" name="RemoveEnd" type="text" /></span>',
				RemoveStart: '<span class="indentx3">RemoveStart: <input data-type="0" name="RemoveStart" type="text" /></span>',
				InsertOffset: '<span class="indentx3">InsertOffset: <input data-type="0" name="InsertOffset" type="text" /></span>',
				TargetAssembly: '<span class="indentx3">TargetAssembly: <input data-type="0" name="OperandType-TargetAssembly" type="text" /></span>',
				TargetType: '<span class="indentx3">TargetType: <input data-type="0" name="OperandType-TargetType" type="text" /></span>',
				TargetField: '<span class="indentx3">TargetField: <input data-type="0" name="OperandType-TargetField" type="text" /></span>',
				TargetMethod: '<span class="indentx3">TargetMethod: <input data-type="0" name="OperandType-TargetMethod" type="text" /></span>',
				TargetMethodSigniture: '<span class="indentx3">TargetMethodSigniture: <input data-type="0" name="OperandType-TargetMethodSigniture" type="text" /></span>',
			};
			
			// TODO: can't we hide them via css?
			
			/* since I add the optional fields in such a hacky way,
			it would reset them to their default values,
			anytime you select another item from any of the lists,
			so store all the values and restore them
			*/
			
			var Selection = {
				Operand: null,
				OperandType: null,
				OpCode: null,
				RemoveEnd: null,
				RemoveStart: null,
				InsertOffset: null,
				TargetAssembly: null,
				TargetType: null,
				TargetField: null,
				TargetMethod: null,
				TargetMethodSigniture: null
			};
			
			// dirty save
			var ValuesToSelection = function() {
				if ($('input[name="Operand"]')[0] && $('input[name="Operand"]')[0].value != "")
					Selection.Operand = $('input[name="Operand"]')[0].value;
				
				if ($('select[name="OperandType"]')[0] && $('select[name="OperandType"]')[0].value != "")
					Selection.OperandType = $('select[name="OperandType"]')[0].value;
				
				if ($('select[name="OpCode"]')[0] && $('select[name="OpCode"]')[0].value != "")
					Selection.OpCode = $('select[name="OpCode"]')[0].value;
				
				if ($('input[name="RemoveEnd"]')[0] && $('input[name="RemoveEnd"]')[0].value != "")
					Selection.RemoveEnd = $('input[name="RemoveEnd"]')[0].value;
				
				if ($('input[name="RemoveStart"]')[0] && $('input[name="RemoveStart"]')[0].value != "")
					Selection.RemoveStart = $('input[name="RemoveStart"]')[0].value;
				
				if ($('input[name="InsertOffset"]')[0] && $('input[name="InsertOffset"]')[0].value != "")
					Selection.InsertOffset = $('input[name="InsertOffset"]')[0].value;
				
				if ($('input[name="OperandType-TargetAssembly"]')[0] && $('input[name="OperandType-TargetAssembly"]')[0].value != "")
					Selection.TargetAssembly = $('input[name="OperandType-TargetAssembly"]')[0].value;
				
				if ($('input[name="OperandType-TargetType"]')[0] && $('input[name="OperandType-TargetType"]')[0].value != "")
					Selection.TargetType = $('input[name="OperandType-TargetType"]')[0].value;
				
				if ($('input[name="OperandType-TargetField"]')[0] && $('input[name="OperandType-TargetField"]')[0].value != "")
					Selection.TargetField = $('input[name="OperandType-TargetField"]')[0].value;
				
				if ($('input[name="OperandType-TargetMethod"]')[0] && $('input[name="OperandType-TargetMethod"]')[0].value != "")
					Selection.TargetMethod = $('input[name="OperandType-TargetMethod"]')[0].value;
				
				if ($('input[name="OperandType-TargetMethodSigniture"]')[0] && $('input[name="OperandType-TargetMethodSigniture"]')[0].value != "")
					Selection.TargetMethodSigniture = $('input[name="OperandType-TargetMethodSigniture"]')[0].value;
			}
			
			// dirty restore
			var SelectionToValues = function() {
				if ($('input[name="Operand"]')[0] && Selection.Operand != "")
					$('input[name="Operand"]')[0].value = Selection.Operand;
				
				if ($('select[name="OperandType"]')[0] && Selection.OperandType != "")
					$('select[name="OperandType"]')[0].value = Selection.OperandType;
				
				if ($('select[name="OpCode"]')[0] && Selection.OpCode != "")
					$('select[name="OpCode"]')[0].value = Selection.OpCode;
				
				if ($('input[name="RemoveEnd"]')[0] && Selection.RemoveEnd != "")
					$('input[name="RemoveEnd"]')[0].value = Selection.RemoveEnd;
				
				if ($('input[name="RemoveStart"]')[0] && Selection.RemoveStart != "")
					$('input[name="RemoveStart"]')[0].value = Selection.RemoveStart;
				
				if ($('input[name="InsertOffset"]')[0] && Selection.InsertOffset != "")
					$('input[name="InsertOffset"]')[0].value = Selection.InsertOffset;
				
				if ($('input[name="OperandType-TargetAssembly"]')[0] && Selection.TargetAssembly != "")
					$('input[name="OperandType-TargetAssembly"]')[0].value = Selection.TargetAssembly;
				
				if ($('input[name="OperandType-TargetType"]')[0] && Selection.TargetType != "")
					$('input[name="OperandType-TargetType"]')[0].value = Selection.TargetType;
				
				if ($('input[name="OperandType-TargetField"]')[0] && Selection.TargetField != "")
					$('input[name="OperandType-TargetField"]')[0].value = Selection.TargetField;
				
				if ($('input[name="OperandType-TargetMethod"]')[0] && Selection.TargetMethod != "")
					$('input[name="OperandType-TargetMethod"]')[0].value = Selection.TargetMethod;
				
				if ($('input[name="OperandType-TargetMethodSigniture"]')[0] && Selection.TargetMethodSigniture != "")
					$('input[name="OperandType-TargetMethodSigniture"]')[0].value = Selection.TargetMethodSigniture;
			}
			
			// the object we use as backend
            var Patchie = {};
            
			// load the selected file
			function handleFileSelect(evt) {
				
				// evt.target.files is an array of files, but we load only one, for the time being
				// probably more later? why not?
				var file = evt.target.files[0];
				var reader = new FileReader();
				reader.readAsText(file);
				
				// wait for the file to be loaded
				$(reader).on("load", function () {
					Patchie = JSON.parse(reader.result);
				});
			}
            
            function SetTargetAssembly() {
                Patchie["TargetAssembly"] = $('input[name="TargetAssembly"]')[0].value;
            }
            
            function AddType() {
				
				// ensure TargetAssembly is set
				SetTargetAssembly();
				
				// create the Types object if it's not already there
                if (!Patchie["Types"]) {
                    Patchie["Types"] = {};
                }
                if (!Patchie["Types"][$('input[name="TargetType"]')[0]]) {
                    Patchie["Types"][$('input[name="TargetType"]')[0].value] = {};
                }
				// TODO: we don't need methods for every type, for example if we just make a few field public
				// so move this to AddMethod() properly
                if (!Patchie["Types"][$('input[name="TargetType"]')[0].value]["Methods"]) {
                    Patchie["Types"][$('input[name="TargetType"]')[0].value]["Methods"] = [];
                }
            }
            
			// TODO: AddField()
			
            function AddMethod() {
				// ensure that the type is added
                AddType();
                for (var i = 0; i < Patchie["Types"][$('input[name="TargetType"]')[0].value]["Methods"].length; i++) {
					// TODO: check for method signiture
                    if (Patchie["Types"][$('input[name="TargetType"]')[0].value]["Methods"][i]["TargetMethod"] == $('input[name="TargetMethod"]')[0].value)
                        return;
                }
                
				// TODO: if ($('input[name="TargetMethod"]')[0].value != '')
				
                Patchie["Types"][$('input[name="TargetType"]')[0].value]["Methods"].push(
                    {
                        TargetMethod: $('input[name="TargetMethod"]')[0].value,
                        Instructions: []
                    }
                );
            }
            
            function AddInstruction() {
				// ensure that the method is added
                AddMethod();
                for (var i = 0; i < Patchie["Types"][$('input[name="TargetType"]')[0].value]["Methods"].length; i++) {
                    if (Patchie["Types"][$('input[name="TargetType"]')[0].value]["Methods"][i]["TargetMethod"] == $('input[name="TargetMethod"]')[0].value) {
						var instruction = {};
						instruction["InstructionType"] = $('select[name="InstructionType"]')[0].value;
						
						switch (instruction["InstructionType"]) {
							case "Clear":
								break;
							
							case "RemoveRange":
								instruction["RemoveEnd"] = $('input[name="RemoveEnd"]')[0].value;

							case "RemoveAt":
								instruction["RemoveStart"] = $('input[name="RemoveStart"]')[0].value;
								break;
							
							case "InsertBefore":
							case "InsertAfter":
								instruction["InsertOffset"] = $('input[name="InsertOffset"]')[0].value;
							
							case "Append":
							case "InsertBeforeRet":
								instruction["OperandType"] = $('select[name="OperandType"]')[0].value;
								instruction["OpCode"] = $('select[name="OpCode"]')[0].value;
								if ($('input[name="Operand"]')[0].value != "")
									instruction["Operand"] = $('input[name="Operand"]')[0].value;
								
								if (instruction["OperandType"] == "Method" || instruction["OperandType"] == "Type" || instruction["OperandType"] == "Field") {
									
									instruction["TargetAssembly"] = $('input[name="OperandType-TargetAssembly"]')[0].value;
									instruction["TargetType"] = $('input[name="OperandType-TargetType"]')[0].value;
									
									if (instruction["OperandType"] == "Method") {
										instruction["TargetMethod"] = $('input[name="OperandType-TargetMethod"]')[0].value;
										
										if ($('input[name="OperandType-TargetMethodSigniture"]')[0].value)
											instruction["TargetMethodSigniture"] = $('input[name="OperandType-TargetMethodSigniture"]')[0].value;
									}
									
									if (instruction["OperandType"] == "Field")
										instruction["TargetField"] = $('input[name="OperandType-Field"]')[0].value;
								}
								if (instruction["OperandType"] == "Parameter" || instruction["OperandType"] == "Variable" || instruction["OperandType"] == "Instruction") {
									instruction["ParamOrVarOffset"] = $('input[name="ParamOrVarOffset"]')[0].value;
								}
								break;
						}
						Patchie["Types"][$('input[name="TargetType"]')[0].value]["Methods"][i]["Instructions"].push(instruction);
                    }
                }
            }
            
            $(function () {
                $('#addType').click(function () {
                    AddType();
                });
                
                $('#addMethod').click(function () {
                    AddMethod();
                });
                
                $('#addInstr').click(function () {
                    AddInstruction();
                });
                
				$(document).ready(function () {
					document.getElementById("loadJSON").addEventListener('change', handleFileSelect, false);
				});
				
                $(document).on('change', 'select', function () {
					ValuesToSelection();
                    var selname = $(this).attr('name');
					
					var result = "";
					
					// only show valid fields for currently selected InstructionType
					switch($('select[name="InstructionType"]')[0].value) {
						case "Clear":
							break;
						
						case "RemoveRange":
							result += OptionalFields.RemoveEnd;
						
						case "RemoveAt":
							result += OptionalFields.RemoveStart;
							break;
							
						case "InsertBefore":
						case "InsertAfter":
							result += OptionalFields.InsertOffset;
							
						case "InsertBeforeRet":
						case "Append":
							result += OptionalFields.OpCode;
							result += OptionalFields.Operand;
							result += OptionalFields.OperandType;
							break;
					}
					
					// and OperandType
					if ($('select[name="OperandType"]')[0]) {
						switch($('select[name="OperandType"]')[0].value) {
							case "Method":
								result += OptionalFields.TargetMethod;
								result += OptionalFields.TargetMethodSigniture;
								result += OptionalFields.TargetType;
								result += OptionalFields.TargetAssembly;
								break;
								
							case "Field":
								result += OptionalFields.TargetField;
								
							case "Type":
								result += OptionalFields.TargetType;
								result += OptionalFields.TargetAssembly;
								break;
								
							case "Parameter":
							case "Variable":
							case "Instruction":
								result += OptionalFields.ParamOrVarOffset;
								break;
						}
					}
				
					document.getElementsByTagName("optionalFields")[0].innerHTML = result;
					SelectionToValues();
                });
                
                $('#form').on('submit', function (e) {
					// generate the treeview
					document.getElementsByTagName("jsonoutput")[0].innerHTML = JSONTree.create(Patchie);
                });
            });
        </script>
    </body>
</html>
