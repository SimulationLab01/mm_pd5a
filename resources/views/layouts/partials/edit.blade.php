<div class="right_pannel">
  <nav class="navbar navbar-default rp_nav">
    <ul class="nav navbar-nav">
      <li id="viewTab" class="active"><a>品項資訊</a></li>
      <li id="imageTab"><a>預覽圖片</a></li>
      <li id="historyTab"><a>歷史紀錄</a></li>
    </ul>
  </nav>
  <div class="row rp_content">
    <div id="viewer" class="group_v">
      <div class="form-group row">
        <div class="v_text">
          <div class="col-sm-6 v_head">
            No. <label id="v_id" class="">OO</label>
          </div>
          <div class="col-sm-6 v_head">
            <label id="v_att" style="float:right" value="1">屬性</label>
          </div>
        </div>
      </div>
      <div class="form-group-title row">
        <div class="v_text col-sm-12">
          <label id="v_name" class="v_title group_v">OOO</label>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 v_field">倉管編號</label>
        <div class="col-sm-9 v_text">
          <label id="v_asset_num" class="v_value group_v">OOO</label>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 v_field">資產編號</label>
        <div class="col-sm-9 v_text">
          <label id="v_purchase_num" class="v_value group_v">OOO</label>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 v_field">資產描述</label>
        <div class="col-sm-9 v_text">
          <label id="v_description" class="v_value group_v">OOO</label>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 v_field">規格</label>
        <div class="col-sm-9 v_text">
          <label id="v_spec" class="v_value group_v">OOO</label>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 v_field">附註</label>
        <div class="col-sm-9 v_text">
          <label id="v_note" class="v_value group_v">OOO</label>
        </div>
      </div>
      <div class="form-group row att_a att_b">
        <label class="col-sm-3 v_field">使用人</label>
        <div class="col-sm-9 v_text">
          <label id="v_user" class="v_value group_v">OOO</label>
        </div>
      </div>
      <div class="form-group row att_a att_b">
        <label class="col-sm-3 v_field">用途</label>
        <div class="col-sm-9 v_text">
          <label id="v_purpose" class="v_value group_v">OOO</label>
        </div>
      </div>
    </div>

    <div id="editor" class="group_e">
      <form method="post" enctype="multipart/form-data" id="update-form" class="form-horizontal">
        <div class="form-group row">
          <div class="v_text">
            <div class="col-sm-6 v_head">
              No. <label id="e_id" class="">OO</label>
            </div>
            <div class="col-sm-6 v_head">
              <label id="e_att" style="float:right" value="1">屬性</label>
            </div>
          </div>
        </div>
        <div class="form-group-title row">
          <div class="v_text col-sm-12">
            <input id="e_name" class="form-control v_input group_e" type="text" name="e_name" placeholder="品項名稱">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 v_field">倉管編號</label>
          <div class="col-sm-9 v_text">
            <input type="text" class="form-control v_input group_e" id="e_asset_num" name="e_asset_num" placeholder="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 v_field">資產編號</label>
          <div class="col-sm-9 v_text">
            <input type="text" class="form-control v_input group_e" id="e_purchase_num" name="e_purchase_num" placeholder="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 v_field">資產描述</label>
          <div class="col-sm-9 v_text">
            <input type="text" class="form-control v_input group_e" id="e_description" name="e_discription" placeholder="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 v_field">規格</label>
          <div class="col-sm-9 v_text">
            <input type="text" class="form-control v_input group_e" id="e_spec" name="e_spec" placeholder="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 v_field">附註</label>
          <div class="col-sm-9 v_text">
            <input type="text" class="form-control v_input group_e" id="e_note" name="e_note" placeholder="">
          </div>
        </div>
        <div class="form-group row att_a att_b">
          <label class="col-sm-3 v_field">使用人</label>
          <div class="col-sm-9 v_text">
            <input type="text" class="form-control v_input group_e" id="e_user" name="e_user" placeholder="">
          </div>
        </div>
        <div class="form-group row att_a att_b">
          <label class="col-sm-3 v_field">用途</label>
          <div class="col-sm-9 v_text">
            <input type="text" class="form-control v_input group_e" id="e_purpose" name="e_purpose" placeholder="">
          </div>
        </div>
        <div class="form-group row att_a att_b">
          <label class="col-sm-3 v_field">圖片</label>
          <div class="col-sm-9 v_text">
            <input id="e_image" name="IMAGE" class="form-control v_input group_e" type="file" accept="image/*">
          </div>
        </div>
      </form>
    </div>



    <div id="history" class="group_h">
      <!-- <div class="h_list">
        <div class="h_date">
          2021.02.21 16:45
        </div>
        <div class="h_body">
          <label>
            <span class="h_name">Jay</span>
            <span class="h_event">歸還</span>
            品項 
          </label>
        </div>
      </div> -->
    </div>

    <div id="image" class="group_p">
      <img id="v_image" src='' style='width: 100%;' alt="">
    </div>

    <div id="generator" class="group_n">
      <form enctype="multipart/form-data" id="insert-form" class="form-horizontal">
        <div class="form-group row">
<!--           <label for="inputTitle" class="col-sm-4 col-form-label">Title</label> -->
          <div class="col-sm-12">
            <input id="n_name" name="NAME" class="form-control" type="text" placeholder="品項名稱">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 v_field">分類</label>
          <div class="col-sm-9 v_text">
            <select id="n_attr" name="ATTRIBUTE" class="browser-default custom-select form-control" placeholder="選擇屬性">
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 v_field">倉管編號</label>
          <div class="col-sm-9 v_text">
            <input id="n_asset_num" name="ASSET_NUM" class="form-control" type="text" placeholder="倉管編號">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 v_field">資產編號</label>
          <div class="col-sm-9 v_text">
            <input id="n_purchase_num" name="PURCHASE_NUM" class="form-control" type="text" placeholder="資產編號">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 v_field">資產描述</label>
          <div class="col-sm-9 v_text">
            <textarea id="n_description" name="DESCRIPTION" class="form-control" rows="3" placeholder="物品規格"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 v_field">規格</label>
          <div class="col-sm-9 v_text">
            <textarea id="n_spec" name="SPEC" class="form-control" rows="3" placeholder="物品規格"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 v_field">附註</label>
          <div class="col-sm-9 v_text">
            <textarea id="n_note" name="NOTE" class="form-control" rows="3" placeholder="附註"></textarea>
          </div>
        </div>
        <div class="form-group row att_a">
          <label class="col-sm-3 v_field">圖片</label>
          <div class="col-sm-9 v_text">
            <input id="n_image" name="IMAGE" class="form-control" type="file" accept="image/*">
          </div>
          <!-- <img src="{{asset("storage/test/9MxJ4y0srD8RcHRQRurbjNAs02k2ay3BSyJOlOaY.png")}}" alt=""> -->
        </div>

<!--         <div class="form-group row">
          <label for="inputRd" class="col-sm-4 col-form-label">Release Date</label>
          <div class="col-sm-8">
            <div class="input-group date datepicker">
              <input type="text" class="form-control" id="inputRd" name="Release_date" readonly>
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
          </div>
        </div> -->
      </form>
    </div>
  </div>
  
  
  <div class="row rp_btn_group">
    <div class="row" align="right">
      <div class="rp_editmenu_field list-group hide">
        <a id="deleteBtn" class="list-group-item">刪除</a>
        <a id="editBtn" class="list-group-item">更改資訊</a>
      </div>
      <div class="rp_btn_field">
        <!-- <button id="borrowBtn" type="button" name="submitBtn" class="btn btn-success group_v">使用登記</button> -->
        <button id="closeBtn" type="button" name="submitBtn" class="btn btn-success group_v">取消</button>
        @if (Auth::check())
        <button id="editMenuBtn" type="button" name="submitBtn" class="btn btn-success group_v"><i class="fas fa-pencil-alt"></i> 編輯 <i class="fas fa-caret-down"></i></button>
        @endif
        <button id="editNBtn" type="button" name="submitBtn" class="btn btn-success group_e">取消</button>
        <button id="editYBtn" type="button" name="submitBtn" class="btn btn-success group_e">完成</button>
        <button id="addNBtn" type="button" name="submitBtn" class="btn btn-success group_n">取消</button>
        <button id="addYBtn" type="button" name="submitBtn" class="btn btn-success group_n">建立</button>
      </div>
    </div>
  </div>
</div>
@if (Auth::check())
<a id="addBtn" class="rounded-Btn"><span>+</span></a>
@endif