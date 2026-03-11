const boxes = document.querySelectorAll(".box");
const turnText = document.getElementById("turn");
const resetBtn = document.getElementById("btnReset");
 
let board = ["", "", "", "", "", "", "", "", ""];
let currentPlayer = "X";
let gameActive = true;
 
const winPatterns = [
  [0,1,2],
  [3,4,5],
  [6,7,8],
  [0,3,6],
  [1,4,7],
  [2,5,8],
  [0,4,8],
  [2,4,6]
];
 
boxes.forEach((box, index) => {
    box.addEventListener("click", () =>
        handleClick(box, index)
);
});
 
 
function handleClick(box, index){
 
    if(board[index] !== "" || gameActive === false)
        return;
 
    board[index] = currentPlayer;
 
    box.textContent = currentPlayer;
 
    box.style.transition = "transform 0.4s";
    box.style.transform = "rotate(180deg)";
 
    checkWinner();
}
 
 
function checkWinner(){
 
    for(let pattern of winPatterns){
 
        const a = pattern[0];
        const b = pattern[1];
        const c = pattern[2];
 
        if(board[a] !== "" && board[a] === board[b] && board[a] === board[c])
        {
            gameActive = false;
 
            boxes[a].classList.add("win");
            boxes[b].classList.add("win");
            boxes[c].classList.add("win");
 
            turnText.textContent = `Player ${currentPlayer} Wins!`;
 
            return;
        }
    }
 
    if(!board.includes("")){
        turnText.textContent = "It's a Draw!";
        gameActive = false;
        return;
    }
 
    currentPlayer = currentPlayer === "X" ? "O" : "X";
    turnText.textContent = `Player ${currentPlayer}'s Turn`;
}
 
 
resetBtn.addEventListener("click", resetGame);
 
 
function resetGame(){
 
    board = ["", "", "", "", "", "", "", "", ""];
    currentPlayer = "X";
    gameActive = true;
 
    boxes.forEach(box => {
        box.textContent = "";
        box.classList.remove("win");
        box.style.transform = "rotate(0deg)";
    });
 
    turnText.textContent = `Player ${currentPlayer}'s Turn`;
}
 