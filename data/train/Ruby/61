def check(tbl)
	(0..3).each do |cur|
		if (
			(tbl[cur][0] && tbl[cur][1] && tbl[cur][2] && tbl[cur][3]) || (tbl[0][cur] && tbl[1][cur] && tbl[2][cur] && tbl[3][cur])
		) 
		return true
		end
	end

	if(
		(tbl[0][0] && tbl[1][1] && tbl[2][2] && tbl[3][3]) ||
		(tbl[0][3] && tbl[1][2] && tbl[2][1] && tbl[3][0])
	)
	return true
	end

	return false
end


def main(file)
	file.gets.to_i.times do |i_case|
		tbl = []
		4.times do
			tmp= file.gets.chomp.split('')
			tbl.push tmp
		end
		file.gets

		dst = nil

		x_tbl = tbl.map{|r| r.map{|cell| (cell=='X' || cell=='T')}}
		o_tbl = tbl.map{|r| r.map{|cell| (cell=='O' || cell=='T')}}
		
		{'X'=>x_tbl, 'O'=>o_tbl}.each_pair do |key,t|
			if (check(t))
				dst = key + ' won'
				break
			end
		end


		if !dst
			dst = 'Draw'
			tbl.flatten.each do |cell|
				if ( '.' == cell )
					dst = 'Game has not completed'
					break
				end
			end
		end

		puts 'Case #' + (i_case+1).to_s + ': ' + dst
	end
end

main(ARGF) unless $PROGRAM_NAME == 'irb'

