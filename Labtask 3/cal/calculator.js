let current = "0";    
let previous = null;   
let op = null;        
let justCalculated = false;

function updateDisplay() {
  document.getElementById("display").value = current;
}

function clearAll() {
  current = "0";
  previous = null;
  op = null;
  justCalculated = false;
  updateDisplay();
}

function appendDigit(d) {
  if (justCalculated) {
    current = "0";
    justCalculated = false;
  }

  if (current === "0") current = d;
  else current += d;

  updateDisplay();
}

function appendDot() {
  if (justCalculated) {
    current = "0";
    justCalculated = false;
  }

  if (!current.includes(".")) {
    current += ".";
    updateDisplay();
  }
}

function backspace() {
  if (justCalculated) {
    clearAll();
    return;
  }

  if (current.length <= 1) current = "0";
  else current = current.slice(0, -1);

  updateDisplay();
}

function toggleSign() {
  if (current === "0") return;

  if (current.startsWith("-")) current = current.slice(1);
  else current = "-" + current;

  updateDisplay();
}

function setOperator(nextOp) {

  const currentNum = Number(current);

  if (previous === null) {
    previous = currentNum;
  } else if (op !== null && !justCalculated) {
   previous = compute(previous, currentNum, op);
  }

  op = nextOp;
  current = "0";
  justCalculated = false;
  updateDisplay();
}

function calculate() {
  if (previous === null || op === null) return;

  const currentNum = Number(current);
  const result = compute(previous, currentNum, op);

  current = String(result);
  previous = null;
  op = null;
  justCalculated = true;
  updateDisplay();
}

function compute(a, b, operator) {
  if (operator === "+") return a + b;
  if (operator === "-") return a - b;
  if (operator === "*") return a * b;

  if (operator === "/") {
    if (b === 0) return "Error"; 
    return a / b;
  }

  return b;
}

updateDisplay();