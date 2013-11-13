import Data.List (intersect)

sample = unlines ["1", "XXXT", "....", "OO..", "....", "", "XOXT", "XXOO", "OXOX", "XXOO"]

main = interact solve

solve = unlines . showCases . solveCases . parseCases . drop 1 . lines

parseCases lines = reverse $ gatherCases (cleanup lines) []
           where cleanup = filter (not.null)

solveCases cases = map solveCase cases

showCases = zipWith renderer [1..] 
          where renderer i c = "Case #" ++ show i ++ ": " ++ c



gatherCases []    acc = acc
gatherCases lines acc = gatherCases remainder (actualCase : acc)
            where remainder = drop 4 lines
                  actualCase = concat $ convert $ take 4 lines
                  convert c = zipWith (\i row -> zipWith (\j ch -> ((i,j),ch)) [0..] row ) [0..] c

solveCase positions = 
          if hasWon $ xPositions positions then "X won"
          else if hasWon $ oPositions positions then "O won"
          else if hasEmpty positions then "Game has not completed"
          else "Draw"

xPositions positions = extendedPositionsFor 'X' positions
oPositions positions = extendedPositionsFor 'O' positions
hasEmpty positions = not . null $ positionsFor '.' positions
extendedPositionsFor ch positions = (positionsFor ch positions) ++ (positionsFor 'T' positions)
positionsFor ch positions = map fst $ filter (\(_, plyr) -> plyr == ch) positions

hasWon plyrPos = any winner winnings
       where winner w = 4 == length (intersect w plyrPos)

winnings = winningRows ++ winningCols ++ winningDiags
winningRows  = map (\x -> zip (repeat x) [0..3]) [0..3]
winningCols  = map (\y -> zip [0..3] (repeat y)) [0..3]
winningDiags = [[(0,0),(1,1),(2,2),(3,3)],[(0,3),(1,2),(2,1),(3,0)]]