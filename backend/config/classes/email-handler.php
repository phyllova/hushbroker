<?php

class email_handler {
	
	public $title;
	
	public function setTitle( ?string $title = null ) {
		$this->title = $title;
		return $this;
	}
	
	/* 
		It is best to avoid repeating code by coping and pasting especially when it will be used so much in a script. Therefore, an interface is designed
	*/
	
	protected function designInterface( $message, $username ) { 
		
		global $settings;
		 
		ob_start();
?>
	
<body style="font-family: sans-serif; font-size: 16px; background-color: #fff; margin: 0; padding: 0;" align="center">
	
    <td align="left" >    
    <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#fff">
        <tr>
            <td align="left" >
                <table cellpadding="0" cellspacing="0" width="600" style="background-color: #fff; margin-top: 20px; margin-bottom: 20px;">
                    <tr>
                        <td align="left" style="background-color: #142433;" >
        <div class="be_logo" align="center"> 
            <img src="<?php echo $settings['logourl']; ?>"> 
    	</div>    
    </td>    
                    </tr>
                    <?php if ($username): ?>
                    <tr>
                        <td align="left" style="padding: 20px;">
                            <p>Hello <?php echo $username; ?>,</p>
                        </td>
                    </tr> 
                    <?php endif; ?>
                    <tr> 
                        <td align="left" style="padding: 20px;">
                            <h4 style="color: #333;"><?php echo $this->title; ?></h4>
                            <p style="color: #333; line-height: 1.5;"><?php echo trim($message); ?></p>
                        </td>
                    </tr>
                    <tr> 
                        <td align="left" style="background-color: #142433; padding: 20px; color: white;">
                            <p style="font-size: 10px;"><strong>Risk Warning:</strong> CFD's and Foreign Exchange (FX) traded on margin carry a high degree of risk. As such they may not be suitable for all investors. Investors should ensure they fully understand the risks associated with leveraged CFD and FX trading before deciding to trade because you can lose some or all invested capital. Investors may choose to seek independent advice and should not risk more than they are prepared to lose.</p>
                            <p style="font-size:10px;">&copy;<?php echo (new DateTime())->format('Y'); ?> - <a href="<?php echo $settings['name']; ?>" style="color: white; text-decoration: none;"><?php echo $settings['name']; ?></a></p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

<?php 

		$output = ob_get_clean();
		return $output;

	}

	public function table_context( array $data, array $dark = [] ) {
		
		$relative_style = "border: 1px solid #f7f7f7; padding: 8px;";
		
		$table = "
			<div style='overflow: auto;'>
				<table style='width: 100%;'>
					<tbody>";
		
		$i = 0;
		foreach( $data as $left => $right ) {
			$left = ucwords($left);
			$right = ucfirst($right);
			$bgcr = in_array($i,$dark) ? '#ebebeb' : '#f7f7f7';
			$table .= "<tr>
				<td style='{$relative_style} background-color: #ebebeb; font-weight: bold;'>{$left}</td>
				<td style='{$relative_style} background-color: {$bgcr}'>{$right}</td>
			</tr>";
			$i++;
		};
		
		$table .= "
					</tbody>
				</table>
			</div>";
			
		return $table;
		
	}
	
	public function message( $message, ?string $username = null ) {
		return $this->designInterface( $message, $username );
	}
	
};