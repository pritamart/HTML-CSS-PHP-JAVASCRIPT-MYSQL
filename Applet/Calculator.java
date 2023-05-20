import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class Calculator extends JFrame implements ActionListener {
	private JButton add, sub, prod, div, refresh;
	private Container cp;
	TextField num1, num2, result;
	Label l1, l2, l3;

	public Calculator() {
		setSize(600, 600);
		setLocation(200, 100);
		setTitle(getClass().getName());

		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

		l1 = new Label("Enter No. 1: ");
		l1.setBounds(133, 100, 70, 20);

		num1 = new TextField();
		num1.setBounds(210, 100, 70, 20);

		l2 = new Label("Enter No. 2: ");
		l2.setBounds(133, 150, 70, 20);

		num2 = new TextField();
		num2.setBounds(210, 150, 70, 20);

		l3 = new Label("Result: ");
		l3.setBounds(133, 200, 70, 20);

		result = new TextField();
		result.setBounds(210, 200, 70, 20);

		add = new JButton("ADD");
		add.setBounds(133, 250, 70, 20);

		sub = new JButton("SUB");
		sub.setBounds(210, 250, 70, 20);

		prod = new JButton("PROD");
		prod.setBounds(287, 250, 70, 20);

		div = new JButton("DIV");
		div.setBounds(364, 250, 70, 20);

		refresh = new JButton("REFRESH");
		refresh.setBounds(240, 280, 120, 20);

		add.addActionListener(this);
		sub.addActionListener(this);
		prod.addActionListener(this);
		div.addActionListener(this);
		refresh.addActionListener(this);

		cp = getContentPane();
		cp.setBackground(Color.pink);
		cp.setLayout(null);

		cp.add(l1);
		cp.add(num1);
		cp.add(l2);
		cp.add(num2);
		cp.add(l3);
		cp.add(result);
		cp.add(add);
		cp.add(sub);
		cp.add(prod);
		cp.add(div);
		cp.add(refresh);

		setVisible(true);
	}

	public void actionPerformed(ActionEvent e) {
		JButton s = (JButton) e.getSource();
		int a = Integer.parseInt(num1.getText());
		int b = Integer.parseInt(num2.getText());

		if (s == add)
			result.setText(String.valueOf(a+b));
		else if (s == sub)
			result.setText(String.valueOf(a-b));
		else if (s == prod)
			result.setText(String.valueOf(a*b));
		else if (s == div) {
			if (b == 0)
				result.setText("Division by zero not possible");
			else
				result.setText(String.valueOf(a/Float.parseFloat(b)));
		}
		else {
			num1.setText("");
			num2.setText("");
			result.setText("");
		}
		cp.repaint();
	}

	public static void main(String[] args) {
		JFrame f = new Calculator();
	}
}