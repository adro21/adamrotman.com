    // Run pswmeter with options
    const myPassMeter = passwordStrengthMeter({
      containerElement: '#pswmeter',
      passwordInput: '#psw-input',
      showMessage: true,
      messageContainer: '#pswmeter-message',
      messagesList: [
        'Enter a secure password',
        'Try adding symbols or uncommon words. Don\'t reuse a password from another site.',
        'That\'s better, but pepper some more secure on that password!',
        'Getting there, try adding symbols or uppercase and lowerase letters.',
        'Now, that\'s a secure password!'
      ],
      height: 6,
      borderRadius: 0,
      pswMinLength: 8,
      colorScore1: '##EC4C46',
      colorScore2: '#aaa',
      colorScore3: '#F7D055',
      colorScore4: 'limegreen'
    });
