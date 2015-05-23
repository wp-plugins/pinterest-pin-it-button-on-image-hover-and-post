<style>
	#post-social-1{
		background-image: url('<?php echo WEBLIZAR_PINIT_PLUGIN_URL.'img/image-8.jpg'; ?>');
	}
	#post-social-2{
		background-image: url('<?php echo WEBLIZAR_PINIT_PLUGIN_URL.'img/image-1.jpg'; ?>');
	}
	#post-social-3{
		background-image: url('<?php echo WEBLIZAR_PINIT_PLUGIN_URL.'img/image-2.jpg'; ?>');
	}
	#post-social-4{
		background-image: url('<?php echo WEBLIZAR_PINIT_PLUGIN_URL.'img/image-3.jpg'; ?>');
	}
	#post-social-5{
		
		background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('<?php echo WEBLIZAR_PINIT_PLUGIN_URL.'img/pattern-1.png'; ?>') left top repeat, url('<?php echo WEBLIZAR_PINIT_PLUGIN_URL.'img/bg1.jpg'; ?>') center center fixed;
	}
	}
	#post-social-6{
		background-image: url('<?php echo WEBLIZAR_PINIT_PLUGIN_URL.'img/image-5.jpg'; ?>');
	}
	#post-social-7{
		background-image: url('<?php echo WEBLIZAR_PINIT_PLUGIN_URL.'img/image-6.jpg'; ?>');
	}
	#post-social-8{
		background-image: url('<?php echo WEBLIZAR_PINIT_PLUGIN_URL.'img/image-7.jpg'; ?>');
	}
	

	::-webkit-scrollbar {
		width: 12px;
	}
	 
	::-webkit-scrollbar-track {
		outline: 0px solid slategrey;
		 background: transparent;
		border-radius: 0px;
		border:0px
	}
	 
	::-webkit-scrollbar-thumb {
		border-radius: 0px;
	 
	background: rgba(71,204,232,0.9);
	border:0px;
	 outline: 0px solid slategrey;
	}
	a:focus {
	-webkit-box-shadow: none !important;
	box-shadow:none !important;
	}
	.wp-color-result{
	height:24px;
	}
	.wp-color-result:hover {
	text-underline:none;
	}
	
	.page-wrapper {
    border-left: 1px solid #19191d;
    margin: 0 0 0 250px;
    padding: 15px 15px;
    position: inherit;
}
</style>
<div id="wrapper">
	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<a class="sidebar-toggle hidden-xs" href="javascript:void(0);"><i class="fa fa-bars fa-2x"></i></a>
			<a class="navbar-brand coming-soon-admin-title" href="#">Pinterest Pin It Button On Image Hover And In Post</a>
		</div>

		<ul class="nav navbar-top-links navbar-right coming-soon-top">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					
				</a>
			</li>
		</ul>

		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav " id="side-menu">
					<li class="sidebar-profile text-center">
						<span class="sidebar-profile-picture">
							<img src="<?php echo WEBLIZAR_PINIT_PLUGIN_URL.'img/photo.jpg'; ?>" alt="Profile Picture"/>
						</span>
						<p class="sidebar-profile-description">Powered By</p>
						<h3 class="sidebar-profile-name">Weblizar</h3>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
	  
	<div class="page-wrapper ui-tabs-panel active" id="option-ui-id-1">	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="margin-none" style="font-size: 28px;">
					Pin It Button Settings
				</h4>
				<p class="margin-none text-s text-muted">Configure Plugin Settings Here</p>
			</div>
			<div class="panel-body">
				<!-- Nav tabs -->
				<ul class="nav nav-pills">
					<li class="active text-m"><a data-toggle="tab" href="#pinit-settings-tab"><strong>Settings</strong> <span class="pull-right close-conversation margin-left "><i class="fa fa-cog"></i></span></a></li>
					<li class=""><a data-toggle="tab" href="#need-help-tab"><strong>Need Help</strong> <span class="pull-right close-conversation margin-left "><i class="fa fa-exclamation-circle"></i></span></a></li>
					<!--<li class=""><a data-toggle="tab" href="#weblizar-tab"><strong>Weblizar</strong>  <span class="pull-right close-conversation margin-left "><i class="fa fa-wordpress"></i></span></a></li>-->
				</ul>
				<?php
				//load saved pin it settings
				$PinItPost 		= get_option("WL_Enable_Pinit_Post");
				$PinItPage 		= get_option("WL_Enable_Pinit_Page");
				$PinItOnHover 	= get_option("WL_Pinit_Btn_On_Hover");
				$PinItDesign	= get_option("WL_Pinit_Btn_Design");
				$PinItColor		= get_option("WL_Pinit_Btn_Color");
				$PinItSize		= get_option("WL_Pinit_Btn_Size");
				?>
				<!-- Tab panes -->
				<div class="tab-content">
					<div id="pinit-settings-tab" class="tab-pane fade active in">
						<hr>
						<div>
							<p>Show Pin It Button In Post</p>
							<input id="pinitpost" name="pinitpost" type="radio" value="1" <?php if($PinItPost == 1) echo "checked=checked"; ?>> Yes 
							<input id="pinitpost" name="pinitpost" type="radio" value="0" <?php if($PinItPost == 0) echo "checked=checked"; ?>> No
						</div>
						<hr>
						
						<div>
							<p>Show Pin It Button In Page</p>
							<input id="pinitpage" name="pinitpage" type="radio" value="1" <?php if($PinItPage == 1) echo "checked=checked"; ?>> Yes 
							<input id="pinitpage" name="pinitpage" type="radio" value="0" <?php if($PinItPage == 0) echo "checked=checked"; ?>> No
						</div>
						<hr>
						
						<div>
							<p>Show Pin It Button On Image Hover</p>
							<input id="pinitonhover" name="pinitonhover" type="radio" value="true" <?php if($PinItOnHover == "true") echo "checked=checked"; ?>> Yes 
							<input id="pinitonhover" name="pinitonhover" type="radio" value="false" <?php if($PinItOnHover == "false") echo "checked=checked"; ?>> No
						</div>
						<hr>
						
						<!-- <div>
							<p>Pin It Button Design</p>
							<select id="pinitdesign" name="pinitdesign">
								<option value="rectangle" <?php if($PinItDesign == "rectangle") echo "selected=selected"; ?>>Rectangle</option>
								<option value="circular" <?php if($PinItDesign == "circular") echo "selected=selected"; ?>>Circular</option>
							</select>
						</div>
						<hr> -->
						
						<div>
							<p>Pin It Button Color (On Image Hover)</p>
							<select id="pinitcolor" name="pinitcolor">
								<option value="red" <?php if($PinItColor == "red") echo "selected=selected"; ?>>Red</option>
								<option value="gray" <?php if($PinItColor == "gray") echo "selected=selected"; ?>>Gray</option>
								<option value="white" <?php if($PinItColor == "white") echo "selected=selected"; ?>>White</option>
							</select>
						</div>
						<hr>
						
						<div>
							<p>Pin It Button Size (On Image Hover)</p>
							<select id="pinitsize" name="pinitsize">
								<option value="small" <?php if($PinItSize == "small") echo "selected=selected"; ?>>Small</option>
								<option value="large" <?php if($PinItSize == "large") echo "selected=selected"; ?>>Large</option>
							</select>
						</div>
						<hr>
						
						<button id="pinitsave" name="pinitsave" class="btn btn-primary btn-lg" type="button" onclick="return SaveSettings();"><i class="fa fa-save fa-2x"></i> Settings</button>
						<p id="loading" name="loading" style="display: none;"><i class="fa fa-cog fa-spin fa-5x"></i></p>
					</div>
					
					<div id="need-help-tab" class="tab-pane fade">
						<h4>Need Help Tab</h4>
						<hr>
						<p>Simply after install and activate plugin go on plugin's "Pinterest PinIt Button" admin menu page.</p>
						<p>Select the Settings tab and configure Pin It Button settings according to you.</p>
						<p>&nbsp;</p>
						<h4>Plugin allows to configure following settings</h4>
						<p>&nbsp;</p>
						<p><strong>1. Enable Pin It Button In Post -</strong> This settings show Pinterest Pin It button after the post content. So, you easily pined all your post content to your Pinterest Bord.</p>
						<p><strong>2. Enable Pin It Button in Page -</strong> This settings show Pinterest Pin It button after the Page content. So, you easily pined all your Page content to your Pinterest Bord.</p>
						<p><strong>3. Show Pin It Button On Image Hover -</strong> Setting shows Pin It Button on each your blog Post/Page image when your hover mouse on any image.</p>
						<p><strong>4. Pin It Button Color (On Image Hover) -</strong> This settings work if Image hover setting is enable. You can change three various colors Red, Gray, White which is best suites to your site.</p>
						<p><strong>5. Pin It Button Size (On Image Hover) -</strong> This settings work if Image hover setting is enable. Through that setting you can show small or large pin it button on image.</p>
						<hr>
					</div>
					<div id="weblizar-tab" class="tab-pane fade">
						<h4>Weblizar </h4>
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="page-wrapper ui-tabs-panel deactive" id="option-ui-id-2">	
	  Plugin Help Here
	</div>
	<div class="page-wrapper ui-tabs-panel deactive" id="option-ui-id-3">	
	  Premium Product Details Here
	</div>
</div>
<script>
function SaveSettings(){
	jQuery('#pinitsave').hide();
	jQuery('#loading').show();
	jQuery.ajax({
		type: "POST",
		url: ajaxurl,
		data: { action: "save_pinit", 
			PinItPost: jQuery("input[name=pinitpost]:radio:checked").val(),
			PinItPage: jQuery("input[name=pinitpage]:radio:checked").val(),
			PinItOnHover: jQuery("input[name=pinitonhover]:radio:checked").val(),
			PinItColor: jQuery("select#pinitcolor").val(),
			PinItDesign: jQuery("select#pinitdesign").val(),
			PinItSize: jQuery("select#pinitsize").val()
		},
		dataType: 'html',
		complete : function() {  },
		success: function(data) {
				jQuery('#loading').hide();
				jQuery('#pinitsave').show();				
		}
	});
}
</script>