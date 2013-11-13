import Data.List

main = interact $ \input -> let
  boards = takes 4 5 $ tail $ lines input
  results = map status boards
  in
   unlines $
   zipWith (\a b -> "Case #" ++ show a ++ ": " ++ show b)
   [1..] results

takes _ _ [] = []
takes n m l = take n l : takes n m (drop m l)
  
data Result = Winner Char | Draw | Incomplete

instance Show Result where
  show (Winner c) = c : " won"
  show Draw = "Draw"
  show Incomplete = "Game has not completed"

status board = let
  it = board ++ transpose board ++ diagonals board
  wins = filter ((== 1) . length . group . delete 'T') it
  winners = concat $ filter (\x -> head x /= '.') $ map (delete 'T') $ wins
  in if null winners
     then if any (== '.') (concat board)
          then Incomplete
          else Draw
     else Winner (head winners)

diagonals :: [[a]] -> [[a]]
diagonals b = case unzip $ zipWith f [0..] b of
  (a, b) -> [a, b]
  where f n r = (r !! n, reverse r !! n)