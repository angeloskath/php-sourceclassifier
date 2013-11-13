#!/usr/bin/env runghc
import Data.List

main = do
  c <- getContents
  let ss = zipWith (\i r->"Case #"++show i++": "++r) [1..] $ solve (lines c)
  mapM_ putStrLn ss

solve (c:cs) = map res . take (read c) . analyze $ cs
  where
    res xs = 
      if x then "X won"
      else if o then "O won"
      else if f then "Game has not completed"
      else "Draw"
      where
        x = won xs 'X'
        o = won xs 'O'
        won xs c = or . map (and . map (\x->x==c || x=='T')) $ (xs++transpose xs++cross xs)
          where
            cross xs = [p [0..], p [3,2..]]
              where p = zipWith (!!) xs
        f = or . map (or . map (=='.')) $ xs
    analyze [] = []
    analyze xs = take 4 xs : analyze (drop 5 xs)
