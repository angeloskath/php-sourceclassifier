require 'pp'

def ppd(*arg)
  if $DEBUG
    pp(*arg)
  end
end

def putsd(*arg)
  if $DEBUG
    puts(*arg)
  end
end

def ri
  readline.to_i
end

def ris
  readline.split.map do |e| e.to_i end
end

def rs
  readline.chomp
end

def rss
  readline.chomp.split
end

def rf
  readline.to_f
end

def rfs
  readline.split.map do |e| e.to_f end
end

def rws(count)
  words = []
  for i in 1 .. count
    words << readline.chomp
  end
  words
end

def check(f, enemy)
  (0..3).each do |i|
    b = true
    (0..3).each do |j|
      b = false if f[i][j] == enemy || f[i][j] == '.'
    end
    return true if b
  end

  (0..3).each do |i|
    b = true
    (0..3).each do |j|
      b = false if f[j][i] == enemy || f[j][i] == '.'
    end
    return true if b
  end
  
  b = true
  (0..3).each do |i|
    b = false if f[i][i] == enemy || f[i][i] == '.'
  end
  return true if b

  b = true
  (0..3).each do |i|
    b = false if f[i][3-i] == enemy || f[i][3-i] == '.'
  end
  return true if b

  return false
end

# main
t_start = Time.now

# 問題に応じて
cases = readline().to_i

(1 .. cases).each do |case_index|
  f = Array.new(4){ |i| Array.new(4) }
  strs = Array.new

  (0..3).each do |i|
    s = rs
    strs << s
    (0..3).each do |j|
      f[i][j] = s[j]
    end
  end

  rs # blank line

  ret = nil

  if !ret
    ret = 'X won' if check(f, 'O')
    ret = 'O won' if check(f, 'X')
  end

  if !ret
    strs.each do |e|
      if e.match('\.')
        ret = 'Game has not completed'
      end
    end
  end

  ret = 'Draw' if !ret

  puts "Case ##{case_index}: #{ret}"

  # progress
  trigger = 
    if cases >= 10
      case_index % (cases / 10) == 0
    else
      true
    end

  if trigger
    STDERR.puts("case #{case_index} / #{cases}, time: #{Time.now - t_start} s")
  end
end
