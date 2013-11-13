import Control.Applicative

main = do
  contents <- getContents
  let ls = lines contents
      con = drop 1 ls
      input = createSqare con
      result = map check input
  mapM putStrLn (mapCase result)

-- |
-- >>> mapCase ["hoge","piyo"]
-- ["Case #1: hoge","Case #2: piyo"]
mapCase :: [String] -> [String]
mapCase xs = 
    let cases = map (\x->"Case #" ++ show x ++ ": ") [1..]
    in
      getZipList $ (++) <$> ZipList cases <*> ZipList xs

-- |
-- >>> createSqare ["a","b","c","e","","1","2","3","4", ""]
-- [["a","b","c","e"],["1","2","3","4"]]
createSqare :: [String] -> [[String]]
createSqare [] = []
createSqare xs = 
    let f4 = take 4 xs
        o = drop 5 xs
    in
      f4 : (createSqare o)

-- | 4*4の入力から勝敗を出す
-- >>> check ["XXXT","....","OO..","...."]
-- "X won"
-- >>> check ["XOXT","XXOO","OXOX","XXOO"]
-- "Draw"
-- >>> check ["XOX.","OX..","....","...."]
-- "Game has not completed"
-- >>> check ["XXXO","..O.",".O..","T..."]
-- "O won"
check :: [String] -> String
check xs =
    let targetRows = divRow xs
        results = map rowCheck targetRows
    in
      if any (=='X') results
      then "X won"
      else
          if any (=='O') results
          then "O won"
          else
              if any (=='N') results
              then "Game has not completed"
              else
                  "Draw"

-- | 行チェック
-- >>> rowCheck "XXXT"
-- 'X'
-- >>> rowCheck "OTOO"
-- 'O'
-- >>> rowCheck "XOXT"
-- 'D'
-- >>> rowCheck "OO.."
-- 'N'
rowCheck :: String -> Char
rowCheck xs =
    if any (=='.') xs
    then 'N'
    else
        if all (\x -> x=='X'||x=='T' ) xs
        then 'X'
        else 
            if all (\x -> x=='O'||x=='T' ) xs
            then 'O'
            else 'D'


-- | 行切り出し
-- >>> divRow ["abcd","efgh","ijkl","mnop"]
-- ["abcd","efgh","ijkl","mnop","aeim","bfjn","cgko","dhlp","afkp","dgjm"]
divRow :: [String] -> [String]
divRow xs = 
    let rows = [[0,1,2,3],[4,5,6,7],[8,9,10,11],[12,13,14,15],[0,4,8,12],[1,5,9,13],[2,6,10,14],[3,7,11,15],[0,5,10,15],[3,6,9,12]]
        one = concat xs
    in
      map (map (one !!) ) rows
