import GoogleCodeJam
import Data.List (transpose)
import Text.Parsec 
import Text.Parsec.String (Parser)
import Control.Applicative hiding ((<|>))

main :: IO ()
main = interact (solver board solveCase)

type HLine  = [Char]
type Board  = [HLine]
data BoardState = X
                | O
                | Draw
                | Incomplete

board :: Parser Board
board = count 4 hline <* newline

hline :: Parser HLine
hline = count 4 (oneOf "XOT.") <* newline

solveCase :: Board -> BoardState
solveCase b
    | any (all (`elem` "XT")) foursomes = X
    | any (all (`elem` "OT")) foursomes = O
    | any (== '.') squares              = Incomplete
    | otherwise                         = Draw
   where foursomes    = rows ++ cols ++ diags
         squares      = concat b
         rows         = b
         cols         = transpose b
         diags        = [(diag [0..3]),(diag (reverse [0..3]))]
         diag js      = map square (zip [0..3] js)
         square (i,j) = (b !! i) !! j

instance Show BoardState where
    show X          = "X won"
    show O          = "O won"
    show Draw       = "Draw"
    show Incomplete = "Game has not completed"
