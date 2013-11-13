(declare make-step)

(defn analyseCells [cells]
	(cond
		(= 4 (count (filter (fn [x] (or (= "X" x) (= "T" x))) cells))) "X won"
		(= 4 (count (filter (fn [x] (or (= "O" x) (= "T" x))) cells))) "O won"
		:else false
	))

(defn column [colNumber line1c line2c line3c line4c]
	[(nth line1c colNumber) (nth line2c colNumber) (nth line3c colNumber) (nth line4c colNumber)])

(defn emptyCellsCount [col] 
	(count (filter (fn [x] (= "." x)) col)))

(defn solve-problem [line1 line2 line3 line4]
	(let [line1c (re-seq #"." (clojure.string/trim line1))
		  line2c (re-seq #"." (clojure.string/trim line2))
		  line3c (re-seq #"." (clojure.string/trim line3))
		  line4c (re-seq #"." (clojure.string/trim line4))
		  someoneHasWon (analyseCells (first (filter analyseCells [
			line1c line2c line3c line4c
			(column 0 line1c line2c line3c line4c)
			(column 1 line1c line2c line3c line4c)
			(column 2 line1c line2c line3c line4c)
			(column 3 line1c line2c line3c line4c)
			[(nth line1c 0) (nth line2c 1) (nth line3c 2) (nth line4c 3)]
			[(nth line1c 3) (nth line2c 2) (nth line3c 1) (nth line4c 0)]
			]
		)))]
	(cond
		someoneHasWon someoneHasWon
		(= 0 (+ (emptyCellsCount line1c) (emptyCellsCount line2c) (emptyCellsCount line3c) (emptyCellsCount line4c))) "Draw"
		:else "Game has not completed"
	)))



; ========================
; ====INFRASTRUCTURE
; ========================
(defn read-lines [filename]
	(line-seq (clojure.java.io/reader (clojure.java.io/file filename))))

(defn file-name [extension]
	(clojure.string/replace
		(get (meta #'read-lines) :file)
		".clj"
		extension))

(def input-file (file-name ".in"))

(def output-file (file-name ".out"))

(def input (read-lines input-file))

(defn lineByTestCase [lines testCase lineNumber]
	(nth lines (+ testCase (* 4 (- testCase 1)) lineNumber)))

(defn solve-problem-suite []
	(with-open [w (clojure.java.io/writer output-file :append false)]
		(doseq [i (range 1 (+ 1 (Integer/parseInt (first input)))) ]
			(let [output-line (format "Case #%d: %s\n" i (solve-problem
				(lineByTestCase input i 0) (lineByTestCase input i 1) (lineByTestCase input i 2) (lineByTestCase input i 3)
				))]
				(print output-line)
				(.write w output-line)))))

(solve-problem-suite)

