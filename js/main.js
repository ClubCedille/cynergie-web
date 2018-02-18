// progressbar.js@1.0.0 version is used
// Docs: http://progressbarjs.readthedocs.org/en/1.0.0/
window.onload = function onLoad() {
  var bar = new ProgressBar.Circle(container, {
    color: '#aaa',
    // This has to be the same size as the maximum width to
    // prevent clipping
    strokeWidth: 4,
    trailWidth: 1,
    easing: 'easeInOut',
    duration: 1400,
    text: {
      autoStyleContainer: false
    },
    from: { color: '#aaa', width: 1 },
    to: { color: '#3ADF00', width: 4 },
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      circle.path.setAttribute('stroke-width', state.width);
  
      var value = Math.round(circle.value() * 100);
      if (value === 0) {
        circle.setText('');
      } else {
        circle.setText(value+ '%');
      }
  
    }
  });
  
  var bar2 = new ProgressBar.Circle(container2, {
    color: '#aaa',
    // This has to be the same size as the maximum width to
    // prevent clipping
    strokeWidth: 4,
    trailWidth: 1,
    easing: 'easeInOut',
    duration: 1400,
    text: {
      autoStyleContainer: false
    },
    from: { color: '#aaa', width: 1 },
    to: { color: '#AEB404', width: 4 },
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      circle.path.setAttribute('stroke-width', state.width);
  
      var value = Math.round(circle.value() * 100);
      if (value === 0) {
        circle.setText('');
      } else {
        circle.setText(value+ '%');
      }
  
    }
  });
  var bar3 = new ProgressBar.Circle(container3, {
    color: '#aaa',
    // This has to be the same size as the maximum width to
    // prevent clipping
    strokeWidth: 4,
    trailWidth: 1,
    easing: 'easeInOut',
    duration: 1400,
    text: {
      autoStyleContainer: false
    },
    from: { color: '#B40404', width: 1 },
    to: { color: '#B40404', width: 4 },
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      circle.path.setAttribute('stroke-width', state.width);
  
      var value = Math.round(circle.value() * 100);
      if (value === 0) {
        circle.setText('');
      } else {
        circle.setText(value+ '%');
      }
  
    }
  });
  bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
  bar.text.style.fontSize = '2rem';
  bar.animate(0.8);  // Number from 0.0 to 1.0
  bar2.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
  bar2.text.style.fontSize = '2rem';
  bar2.animate(0.6);  // Number from 0.0 to 1.0
  bar3.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
  bar3.text.style.fontSize = '2rem';
  bar3.animate(0.2);  // Number from 0.0 to 1.0
  
};

