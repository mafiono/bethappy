<?php echo $this->Html->script("Venum.gamewindow"); ?>
<?php echo $this->Html->script("Venum.customfunction"); ?>
<?php echo $this->Html->script("Venum.jquery"); ?>
<?php echo $this->Html->css('Venum.login.form');?>
<div class="form-container">
	<div>
		<!-- Main Heading Starts -->
		<div class="text-center top-text">
			<h1><span>Withdraw And Deposit</span> Money</h1>
			<p>withdraws and/or deposits money!</p>
		</div>
		<!-- Main Heading Ends -->
			<!-- Form Starts -->
			<form class="custom-form" action="/venum/VenumWallet/WithdrawAndDeposit" method="POST">
				<!-- Input Field Starts -->
				<div class="form-group">
					<input class="form-control" type="hidden" name="operatorId" value="atlanticslotEURtest">
					<?php if(isset($_SESSION['MyPlayerID'])) {  ?>
						<input class="form-control" type="text" name="UserId"  placeholder="UserId" required="" value="<?php echo $_SESSION['MyPlayerID'] ;?>">
					<?php }else{?>
						<input class="form-control" type="text" name="UserId"  placeholder="UserId" required="">
					<?php }?>
					<input class="form-control" type="text" name="GameId"  placeholder="GameId" required="" onkeyup="return forceLower(this);">
					<input class="form-control" type="text" name="GameBrand"  placeholder="GameBrand" required="" onkeyup="return forceLower(this);">
					<input class="form-control" type="text" name="SessionId"  placeholder="SessionId">
					<input class="form-control" type="text" name="BetId"  placeholder="BetId" required="">
					<input class="form-control" type="text" name="TransactionId"  placeholder="TransactionId" required="">
					<input class="form-control" type="text" name="Reason"  placeholder="Reason" required="">
					<input class="form-control" type="text" name="WithdrawAmount"  placeholder="WithdrawAmount" required="">
					<input class="form-control" type="text" name="DepositAmount"  placeholder="DepositAmount" required="">
					
				</div>
				
				<div class="form-group-btn">
					<button class="custom-button login btn-primary" type="submit"><span data-hover="login">Check</span></button>
					<!-- <p class="text-center">don't have an account ? <a href="register.html">register now</a> -->
				</div>
			
			</form>
			<!-- Form Ends -->
	</div>
</div>

			