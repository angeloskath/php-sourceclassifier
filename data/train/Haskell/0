{-# LANGUAGE TupleSections #-}

import Control.Applicative
import Control.Monad
import Data.List
import Text.Printf

main :: IO ()
main = do
  n <- readLn
  forM_ [1..n] $ \cn -> do
    bd <- replicateM 4 getLine
    _ <- getLine

    let check c = any (all (\(i, j) -> is $ bd !! i !! j)) ps where
          is d = d == c || d == 'T'
          ps = [ [ (i, j) | j <- [0..3]] | i <- [0..3] ] ++
               [ [ (j, i) | j <- [0..3]] | i <- [0..3] ] ++
               [ map (\i -> (i, i)) [0..3] ] ++
               [ map (\i -> (i, 3-i)) [0..3] ]

    let ans = case () of
          _ | check 'X' -> "X won"
            | check 'O' -> "O won"
            | any (any (== '.')) bd -> "Game has not completed"
            | otherwise -> "Draw"

    printf "Case #%d: %s\n" (cn :: Int) ans
