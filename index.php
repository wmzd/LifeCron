<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeCron</title>
</head>
<body onload="startTimers()">
  <div>
    <h2>Thraxan</h2>
    <div id="display1">00:00:00</div>
  </div>
  <div>
    <h2>Cat/Dog</h2>
    <div id="display4">00:00:00</div>
  </div>
  <div>
    <h2>Human</h2>
    <div id="display2">00:00:00</div>
  </div>
  <div>
    <h2>Yoda</h2>
    <div id="display5">00:00:00</div>
  </div>
  <div>
    <h2>Viltrumite</h2>
    <div id="display3">00:00:00</div>
  </div>

<script>
  let timers = [null, null, null, null, null];
  let times = [
    { hrs: 0, mins: 0, secs: 0 },
    { hrs: 0, mins: 0, secs: 0 },
    { hrs: 0, mins: 0, secs: 0 },
    { hrs: 0, mins: 0, secs: 0 },
    { hrs: 0, mins: 0, secs: 0 }
  ];

  function startTimers() {
    timers[0] = setInterval(() => run(0), 12.5); // Thraxan
    timers[1] = setInterval(() => run(1), 1000); // Human
    timers[2] = setInterval(() => run(2), 248000); // Viltrumite
    timers[3] = setInterval(() => run(3), 250); // Pet
    timers[4] = setInterval(() => run(4), 11000); // Yoda
  }

  function run(index) {
    const display = document.getElementById(`display${index + 1}`);
    display.textContent = getTime(index);
    times[index].secs++;
    if (times[index].secs == 60) {
      times[index].secs = 0;
      times[index].mins++;
      if (times[index].mins == 60) {
        times[index].mins = 0;
        times[index].hrs++;
      }
    }
  }

  function getTime(index) {
    const time = times[index];
    return (time.hrs < 10 ? '0' + time.hrs : time.hrs) + ':' + 
           (time.mins < 10 ? '0' + time.mins : time.mins) + ':' + 
           (time.secs < 10 ? '0' + time.secs : time.secs);
  }
</script>

</body>
</html>